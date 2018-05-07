<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEnvId() 获取计算环境ID
 * @method void setEnvId(string $EnvId) 设置计算环境ID
 * @method string getEnvName() 获取计算环境名称
 * @method void setEnvName(string $EnvName) 设置计算环境名称
 * @method Placement getPlacement() 获取位置信息
 * @method void setPlacement(Placement $Placement) 设置位置信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method ComputeNodeMetrics getComputeNodeMetrics() 获取计算节点统计指标
 * @method void setComputeNodeMetrics(ComputeNodeMetrics $ComputeNodeMetrics) 设置计算节点统计指标
 * @method string getEnvType() 获取计算环境类型
 * @method void setEnvType(string $EnvType) 设置计算环境类型
 * @method integer getDesiredComputeNodeCount() 获取计算节点期望个数
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置计算节点期望个数
 */

/**
 *计算环境信息
 */
class ComputeEnvView extends AbstractModel
{
    /**
     * @var string 计算环境ID
     */
    public $EnvId;

    /**
     * @var string 计算环境名称
     */
    public $EnvName;

    /**
     * @var Placement 位置信息
     */
    public $Placement;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var ComputeNodeMetrics 计算节点统计指标
     */
    public $ComputeNodeMetrics;

    /**
     * @var string 计算环境类型
     */
    public $EnvType;

    /**
     * @var integer 计算节点期望个数
     */
    public $DesiredComputeNodeCount;
    /**
     * @param string $EnvId 计算环境ID
     * @param string $EnvName 计算环境名称
     * @param Placement $Placement 位置信息
     * @param string $CreateTime 创建时间
     * @param ComputeNodeMetrics $ComputeNodeMetrics 计算节点统计指标
     * @param string $EnvType 计算环境类型
     * @param integer $DesiredComputeNodeCount 计算节点期望个数
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ComputeNodeMetrics",$param) and $param["ComputeNodeMetrics"] !== null) {
            $this->ComputeNodeMetrics = new ComputeNodeMetrics();
            $this->ComputeNodeMetrics->deserialize($param["ComputeNodeMetrics"]);
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }
    }
}