<?php

/**
 * @author René Klatt <rene.klatt@project-a.com>
 * @version $Id$
 * @property Sao_Zed_Catalog_Component_Facade $facadeCatalog
 */
class Sao_Zed_Mail_Component_Model_Collector_SecondArtistArtworkAvailabilityReminder extends Sao_Zed_Mail_Component_Model_Collector
    implements ProjectA_Zed_Catalog_Component_Dependency_Facade_Interface
{

    use ProjectA_Zed_Catalog_Component_Dependency_Facade_Trait;

    /**
     * @var Sao_Shared_Mail_Transfer_OrderConfirmation
     */
    protected $mailTransfer;

    /**
     * @return string
     */
    protected function getMailType()
    {
        return self::SECOND_ARTIST_ARTWORK_AVAILABILTY_REMINDER;
    }

    /**
     * @return string
     */
    protected function getMailSubType()
    {
        return self::MAIL_TYPE_ARTIST;
    }

    /**
     * @return Sao_Shared_Mail_Transfer_SecondArtistArtworkAvailabilityReminder
     */
    protected function createMailTransfer()
    {
        return Generated_Shared_Library_TransferLoader::getMailSecondArtistArtworkAvailabilityReminder();
    }

    /**
     * @param BaseObject $orderItemEntity - ProjectA_Zed_Sales_Persistence_PacSalesOrderItem
     * @param null $context
     * @return mixed|Sao_Shared_Mail_Transfer_OrderConfirmation
     */
    public function getMailTransfer(BaseObject $orderItemEntity, $context = null)
    {
        /* @var $orderItemEntity ProjectA_Zed_Sales_Persistence_PacSalesOrderItem */
        $mailConfig = ProjectA_Shared_Library_Config::get('mail');
        $urlConfig = ProjectA_Shared_Library_Config::get('url');
        $legacyUrl = $urlConfig['legacy'];
        $product = $this->getProductByEntity($orderItemEntity);
        $orderEntity = $orderItemEntity->getOrder();

        $profileName = $product[Sao_Shared_Library_Catalog_Interface_ProductAttributeConstant::ATTRIBUTE_ARTIST_FIRST_NAME]
            . ' ' . $product[Sao_Shared_Library_Catalog_Interface_ProductAttributeConstant::ATTRIBUTE_ARTIST_LAST_NAME];

        $placeholderData = array(
            'profileName' => $profileName,
            'artTitle' => $product[Sao_Shared_Library_Catalog_Interface_ProductAttributeConstant::ATTRIBUTE_NAME],
            'artUrl' => $legacyUrl . $product[Sao_Shared_Library_Catalog_Interface_ProductAttributeConstant::ATTRIBUTE_URL],
            'phoneNumber' => $product[Sao_Shared_Library_Catalog_Interface_ProductAttributeConstant::ATTRIBUTE_ARTIST_PHONE],
            'availabilityLink' => $this->getLink($orderItemEntity, $mailConfig, Sao_Zed_Sales_Component_Interface_OrderprocessConstant::EVENT_ARTWORK_IS_AVAILABLE)
        );
        $this->mailTransfer->setSubject($this->getSubject($placeholderData));
        $this->mailTransfer->setOrderId($orderEntity->getIdSalesOrder());
        $this->mailTransfer->setId($orderItemEntity->getIdSalesOrderItem());
        $this->mailTransfer->setRecipientAddress($product[Sao_Shared_Library_Catalog_Interface_ProductAttributeConstant::ATTRIBUTE_ARTIST_EMAIL]);
        $this->addPlaceholders($placeholderData);
        return $this->mailTransfer;
    }

    /**
     * @param ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogProduct|null
     */
    protected function getProductByEntity(ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity)
    {
        $product = $this->facadeCatalog->getProductBySku($orderItemEntity->getSku());
        return $this->facadeCatalog->getProduct($product);
    }

    /**
     * @param ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity
     * @param $mailConfig
     * @param $event
     * @return string
     */
    protected function getLink(ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity, $mailConfig, $event)
    {
        $notificationEntry = (new Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationQuery())->filterByFkSalesOrderItem($orderItemEntity->getIdSalesOrderItem())
            ->filterByEvent($event)
            ->findOne();

        return $mailConfig['availabilityCheckUrl'] . '/' .  $notificationEntry->getHash();
    }

}
