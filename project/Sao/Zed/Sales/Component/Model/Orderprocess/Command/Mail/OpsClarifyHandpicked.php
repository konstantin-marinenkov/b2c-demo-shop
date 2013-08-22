<?php

/**
 * @author René Klatt <rene.klatt@project-a.com>
 * @property Sao_Zed_Mail_Component_Facade $facadeMail
 */
class Sao_Zed_Sales_Component_Model_Orderprocess_Command_Mail_OpsClarifyHandpicked
    extends ProjectA_Zed_Sales_Component_Model_Orderprocess_Command_Mail_Abstract
        implements ProjectA_Zed_Sales_Component_Interface_OrderItemCommand
{

    /**
     * @return string
     */
    public function getMailRepresentationName()
    {
        return Sao_Zed_Mail_Component_Model_Constants::CLARIFY_HANDPICKED;
    }

    /**
     * @param ProjectA_Zed_Sales_Persistence_PacSalesOrder $orderEntity
     * @param ProjectA_Zed_Sales_Component_Interface_ContextCollection $context
     */
    public function __invoke (ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity, ProjectA_Zed_Library_StateMachine_Context $context)
    {
        $mailTransfer = $this->facadeMail->getOpsClarifyHandpickedMailTransfer($orderItemEntity);
        $result = $this->facadeMail->sendMail($mailTransfer);
        $this->handleResponse($result, $mailTransfer, $orderItemEntity->getOrder());
    }

}