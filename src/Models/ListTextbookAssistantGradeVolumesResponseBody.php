<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListTextbookAssistantGradeVolumesResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 0
     *
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description Id of the request
     *
     * @example F3B1AAF2-3041-5AA7-A352-BD5F998FA465
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'data',
        'errCode'        => 'errCode',
        'errMessage'     => 'errMessage',
        'httpStatusCode' => 'httpStatusCode',
        'requestId'      => 'requestId',
        'success'        => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errCode) {
            $res['errCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['errMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTextbookAssistantGradeVolumesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['errCode'])) {
            $model->errCode = $map['errCode'];
        }
        if (isset($map['errMessage'])) {
            $model->errMessage = $map['errMessage'];
        }
        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}