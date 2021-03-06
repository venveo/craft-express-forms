<?php

namespace Solspace\ExpressForms\events\emailNotifications;

use Solspace\ExpressForms\elements\Submission;
use Solspace\ExpressForms\models\EmailNotification;
use Solspace\ExpressForms\models\Form;
use yii\base\Event;

class RenderEmailValuesEvent extends Event
{
    /** @var Form */
    private $form;

    /** @var Submission */
    private $submission;

    /** @var EmailNotification */
    private $notification;

    /** @var array */
    private $templateVariables;

    /** @var array */
    private $fieldValues;

    /**
     * RenderEmailValuesEvent constructor.
     *
     * @param Form              $form
     * @param Submission        $submission
     * @param EmailNotification $notification
     * @param array             $templateVariables
     * @param array             $fieldValues
     */
    public function __construct(
        Form $form,
        Submission $submission,
        EmailNotification $notification,
        array $templateVariables,
        array $fieldValues
    ) {
        $this->form              = $form;
        $this->submission        = $submission;
        $this->notification      = $notification;
        $this->templateVariables = $templateVariables;
        $this->fieldValues       = $fieldValues;

        parent::__construct();
    }

    /**
     * @return Form
     */
    public function getForm(): Form
    {
        return $this->form;
    }

    /**
     * @return Submission
     */
    public function getSubmission(): Submission
    {
        return $this->submission;
    }

    /**
     * @return EmailNotification
     */
    public function getNotification(): EmailNotification
    {
        return $this->notification;
    }

    /**
     * @return array
     */
    public function getTemplateVariables(): array
    {
        return $this->templateVariables;
    }

    /**
     * @param array $templateVariables
     *
     * @return RenderEmailValuesEvent
     */
    public function setTemplateVariables(array $templateVariables): RenderEmailValuesEvent
    {
        $this->templateVariables = $templateVariables;

        return $this;
    }

    /**
     * @return array
     */
    public function getFieldValues(): array
    {
        return $this->fieldValues;
    }

    /**
     * @param array $fieldValues
     *
     * @return RenderEmailValuesEvent
     */
    public function setFieldValues(array $fieldValues): RenderEmailValuesEvent
    {
        $this->fieldValues = $fieldValues;

        return $this;
    }
}
