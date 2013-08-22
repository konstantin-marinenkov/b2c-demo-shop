<?php
/**
 * Class Sao_Zed_Sales_Component_Model_Orderprocess_Command_SendPayoutToSns
 * @property Sao_Zed_Sales_Component_Facade $facadeSales
 */
class Sao_Zed_Sales_Component_Model_Orderprocess_Command_SendPayoutToSns
    extends ProjectA_Zed_Sales_Component_Model_Orderprocess_CommandAbstract
    implements ProjectA_Zed_Sales_Component_Interface_OrderItemCommand
{

    /**
     * @param ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity
     * @param ProjectA_Zed_Library_StateMachine_Context $context
     * @throws ProjectA_Zed_Library_Exception
     */
    public function __invoke(ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $orderItemEntity, ProjectA_Zed_Library_StateMachine_Context $context)
    {

        if ($orderItemEntity->getOrder()->getIsTest()) {
            $this->addNote('WOULD sent payout notification to sns.', $orderItemEntity->getOrder(), true);
            return;
        }

        $messageId = $this->facadeSales->sendPayoutNotificationForItem($orderItemEntity);
        if ($messageId) {
            $this->addNote('sent payout notification to sns. message id was ' . $messageId, $orderItemEntity->getOrder(), true);
        } else {
            $this->addNote('sending payout notification to sns failed', $orderItemEntity->getOrder(), false);
        }
    }

}
