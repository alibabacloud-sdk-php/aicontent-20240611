<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryImageAssetRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryImageAssetResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddInferenceJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddInferenceJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryImageAssetRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryImageAssetResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainJobListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainStatusRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AiContent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aicontent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 拓展练问答对生成
     *  *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request AITeacherExpansionPracticeTaskGenerateRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->keySentences)) {
            $body['keySentences'] = $request->keySentences;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $body['keyWords'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->learningObject)) {
            $body['learningObject'] = $request->learningObject;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['textContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->textbook)) {
            $body['textbook'] = $request->textbook;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AITeacherExpansionPracticeTaskGenerate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/expansionPractice/generateTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AITeacherExpansionPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拓展练问答对生成
     *  *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request AITeacherExpansionPracticeTaskGenerateRequest
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步基础练问答对生成
     *  *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request AITeacherSyncPracticeTaskGenerateRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->keySentences)) {
            $body['keySentences'] = $request->keySentences;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $body['keyWords'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->learningObject)) {
            $body['learningObject'] = $request->learningObject;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['textContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->textbook)) {
            $body['textbook'] = $request->textbook;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AITeacherSyncPracticeTaskGenerate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/syncPractice/generateTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AITeacherSyncPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步基础练问答对生成
     *  *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request AITeacherSyncPracticeTaskGenerateRequest
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AliyunConsoleOpenApiQueryAliyunConsoleServcieList',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aliyunconsole/queryAliyunConsoleServcieList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime);
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AliyunConsoleOpenApiQueryAliyunConsoleServiceList',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aliyunconsole/queryAliyunConsoleServiceList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime);
    }

    /**
     * @summary 个性化文生图/基于一个预训练模型创建图片推理任务
     *  *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request PersonalizedTextToImageAddInferenceJobRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageNumber)) {
            $body['imageNumber'] = $request->imageNumber;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['imageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->seed)) {
            $body['seed'] = $request->seed;
        }
        if (!Utils::isUnset($request->strength)) {
            $body['strength'] = $request->strength;
        }
        if (!Utils::isUnset($request->trainSteps)) {
            $body['trainSteps'] = $request->trainSteps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PersonalizedTextToImageAddInferenceJob',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/addPreModelInferenceJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PersonalizedTextToImageAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/基于一个预训练模型创建图片推理任务
     *  *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request PersonalizedTextToImageAddInferenceJobRequest
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/通过唯一的图片编号获取图片内容
     *  *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request PersonalizedTextToImageQueryImageAssetRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodeFormat)) {
            $query['encodeFormat'] = $request->encodeFormat;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['imageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PersonalizedTextToImageQueryImageAsset',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryImageAssetFromImageId',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return PersonalizedTextToImageQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/通过唯一的图片编号获取图片内容
     *  *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request PersonalizedTextToImageQueryImageAssetRequest
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/查询预制模型推理任务的状态
     *  *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     * @param string[]                                                    $headers map
     * @param RuntimeOptions                                              $runtime runtime options for this request RuntimeOptions
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inferenceJobId)) {
            $query['inferenceJobId'] = $request->inferenceJobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PersonalizedTextToImageQueryPreModelInferenceJobInfo',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryPreModelInferenceJobInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/查询预制模型推理任务的状态
     *  *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/基于一个模型创建图片推理任务
     *  *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request Personalizedtxt2imgAddInferenceJobRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageNumber)) {
            $body['imageNumber'] = $request->imageNumber;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->seed)) {
            $body['seed'] = $request->seed;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgAddInferenceJob',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/addInferenceJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/基于一个模型创建图片推理任务
     *  *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request Personalizedtxt2imgAddInferenceJobRequest
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/创建一个模型训练任务
     *  *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request Personalizedtxt2imgAddModelTrainJobRequest
     * @param string[]                                   $headers map
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['imageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->objectType)) {
            $body['objectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->trainSteps)) {
            $body['trainSteps'] = $request->trainSteps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgAddModelTrainJob',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/addModelTrainJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgAddModelTrainJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/创建一个模型训练任务
     *  *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request Personalizedtxt2imgAddModelTrainJobRequest
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/图片二进制内容获取
     *  *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request Personalizedtxt2imgQueryImageAssetRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodeFormat)) {
            $query['encodeFormat'] = $request->encodeFormat;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['imageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->promptId)) {
            $query['promptId'] = $request->promptId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryImageAsset',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryImageAsset',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return Personalizedtxt2imgQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/图片二进制内容获取
     *  *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request Personalizedtxt2imgQueryImageAssetRequest
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/查询模型推理任务的状态和结果信息
     *  *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request Personalizedtxt2imgQueryInferenceJobInfoRequest
     * @param string[]                                        $headers map
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inferenceJobId)) {
            $query['inferenceJobId'] = $request->inferenceJobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryInferenceJobInfo',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryInferenceJobInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgQueryInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/查询模型推理任务的状态和结果信息
     *  *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request Personalizedtxt2imgQueryInferenceJobInfoRequest
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/查询模型训练任务列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryModelTrainJobList',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryModelTrainJobList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgQueryModelTrainJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/查询模型训练任务列表
     *  *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime);
    }

    /**
     * @summary 个性化文生图/模型训练状态查询
     *  *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request Personalizedtxt2imgQueryModelTrainStatusRequest
     * @param string[]                                        $headers map
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modelId)) {
            $query['modelId'] = $request->modelId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryModelTrainStatus',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryModelTrainStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgQueryModelTrainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/模型训练状态查询
     *  *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request Personalizedtxt2imgQueryModelTrainStatusRequest
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime);
    }
}
