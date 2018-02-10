<?php
namespace Azhar\Pingandget\Controller;

/***
 *
 * This file is part of the "pingandget" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * CustomerController
 */
class CustomerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $customers = $this->customerRepository->findAll();
        $this->view->assign('customers', $customers);
    }

    /**
     * action show
     *
     * @param \Azhar\Pingandget\Domain\Model\Customer $customer
     * @return void
     */
    public function showAction(\Azhar\Pingandget\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Azhar\Pingandget\Domain\Model\Customer $newCustomer
     * @return void
     */
    public function createAction(\Azhar\Pingandget\Domain\Model\Customer $newCustomer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->add($newCustomer);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Azhar\Pingandget\Domain\Model\Customer $customer
     * @ignorevalidation $customer
     * @return void
     */
    public function editAction(\Azhar\Pingandget\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }

    /**
     * action update
     *
     * @param \Azhar\Pingandget\Domain\Model\Customer $customer
     * @return void
     */
    public function updateAction(\Azhar\Pingandget\Domain\Model\Customer $customer)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->update($customer);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Azhar\Pingandget\Domain\Model\Customer $customer
     * @return void
     */
    public function deleteAction(\Azhar\Pingandget\Domain\Model\Customer $customer)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->remove($customer);
        $this->redirect('list');
    }
}
