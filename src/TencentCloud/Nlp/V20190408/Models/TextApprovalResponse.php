<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getEvilTokens() 获取文本审核输出结果列表，列表每个元素包含以下信息：

EvilFlag（文本恶意等级）：
0、正常；
1、恶意；
2、可疑送审

EvilType（文本恶意类型）：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法(如赌博/造假/违法交易等)；
8、综合；
9、联系方式/链接

EvilKeywords（恶意关键词组）
 * @method void setEvilTokens(array $EvilTokens) 设置文本审核输出结果列表，列表每个元素包含以下信息：

EvilFlag（文本恶意等级）：
0、正常；
1、恶意；
2、可疑送审

EvilType（文本恶意类型）：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法(如赌博/造假/违法交易等)；
8、综合；
9、联系方式/链接

EvilKeywords（恶意关键词组）
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *TextApproval返回参数结构体
 */
class TextApprovalResponse extends AbstractModel
{
    /**
     * @var array 文本审核输出结果列表，列表每个元素包含以下信息：

EvilFlag（文本恶意等级）：
0、正常；
1、恶意；
2、可疑送审

EvilType（文本恶意类型）：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法(如赌博/造假/违法交易等)；
8、综合；
9、联系方式/链接

EvilKeywords（恶意关键词组）
     */
    public $EvilTokens;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $EvilTokens 文本审核输出结果列表，列表每个元素包含以下信息：

EvilFlag（文本恶意等级）：
0、正常；
1、恶意；
2、可疑送审

EvilType（文本恶意类型）：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法(如赌博/造假/违法交易等)；
8、综合；
9、联系方式/链接

EvilKeywords（恶意关键词组）
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EvilTokens",$param) and $param["EvilTokens"] !== null) {
            $this->EvilTokens = [];
            foreach ($param["EvilTokens"] as $key => $value){
                $obj = new EvilToken();
                $obj->deserialize($value);
                array_push($this->EvilTokens, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
