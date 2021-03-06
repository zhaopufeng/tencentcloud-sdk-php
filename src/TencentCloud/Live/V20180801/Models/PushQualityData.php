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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTime() 获取数据时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
 * @method void setTime(string $Time) 设置数据时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
 * @method string getPushDomain() 获取推流域名。
 * @method void setPushDomain(string $PushDomain) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getClientIp() 获取推流客户端ip。
 * @method void setClientIp(string $ClientIp) 设置推流客户端ip。
 * @method string getBeginPushTime() 获取开始推流时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
 * @method void setBeginPushTime(string $BeginPushTime) 设置开始推流时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
 * @method string getResolution() 获取分辨率信息。
 * @method void setResolution(string $Resolution) 设置分辨率信息。
 * @method string getVCodec() 获取视频编码格式。
 * @method void setVCodec(string $VCodec) 设置视频编码格式。
 * @method string getACodec() 获取音频编码格式。
 * @method void setACodec(string $ACodec) 设置音频编码格式。
 * @method string getSequence() 获取推流序列号，用来唯一的标志一次推流。
 * @method void setSequence(string $Sequence) 设置推流序列号，用来唯一的标志一次推流。
 * @method integer getVideoFps() 获取视频帧率。
 * @method void setVideoFps(integer $VideoFps) 设置视频帧率。
 * @method integer getVideoRate() 获取视频码率，单位是bps。
 * @method void setVideoRate(integer $VideoRate) 设置视频码率，单位是bps。
 * @method integer getAudioFps() 获取音频帧率。
 * @method void setAudioFps(integer $AudioFps) 设置音频帧率。
 * @method integer getAudioRate() 获取音频码率，单位是bps。
 * @method void setAudioRate(integer $AudioRate) 设置音频码率，单位是bps。
 * @method integer getLocalTs() 获取本地流逝时间，单位是ms，音视频流逝时间与本地流逝时间的差距越大表示推流质量越差，上行卡顿越严重。
 * @method void setLocalTs(integer $LocalTs) 设置本地流逝时间，单位是ms，音视频流逝时间与本地流逝时间的差距越大表示推流质量越差，上行卡顿越严重。
 * @method integer getVideoTs() 获取视频流逝时间，单位是ms。
 * @method void setVideoTs(integer $VideoTs) 设置视频流逝时间，单位是ms。
 * @method integer getAudioTs() 获取音频流逝时间，单位是ms。
 * @method void setAudioTs(integer $AudioTs) 设置音频流逝时间，单位是ms。
 */

/**
 *某条流的推流质量详情数据。
 */
class PushQualityData extends AbstractModel
{
    /**
     * @var string 数据时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
     */
    public $Time;

    /**
     * @var string 推流域名。
     */
    public $PushDomain;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string 推流客户端ip。
     */
    public $ClientIp;

    /**
     * @var string 开始推流时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
     */
    public $BeginPushTime;

    /**
     * @var string 分辨率信息。
     */
    public $Resolution;

    /**
     * @var string 视频编码格式。
     */
    public $VCodec;

    /**
     * @var string 音频编码格式。
     */
    public $ACodec;

    /**
     * @var string 推流序列号，用来唯一的标志一次推流。
     */
    public $Sequence;

    /**
     * @var integer 视频帧率。
     */
    public $VideoFps;

    /**
     * @var integer 视频码率，单位是bps。
     */
    public $VideoRate;

    /**
     * @var integer 音频帧率。
     */
    public $AudioFps;

    /**
     * @var integer 音频码率，单位是bps。
     */
    public $AudioRate;

    /**
     * @var integer 本地流逝时间，单位是ms，音视频流逝时间与本地流逝时间的差距越大表示推流质量越差，上行卡顿越严重。
     */
    public $LocalTs;

    /**
     * @var integer 视频流逝时间，单位是ms。
     */
    public $VideoTs;

    /**
     * @var integer 音频流逝时间，单位是ms。
     */
    public $AudioTs;
    /**
     * @param string $Time 数据时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
     * @param string $PushDomain 推流域名。
     * @param string $AppName 推流路径。
     * @param string $ClientIp 推流客户端ip。
     * @param string $BeginPushTime 开始推流时间，格式是%Y-%m-%d %H:%M:%S.%ms，精确到毫秒级。
     * @param string $Resolution 分辨率信息。
     * @param string $VCodec 视频编码格式。
     * @param string $ACodec 音频编码格式。
     * @param string $Sequence 推流序列号，用来唯一的标志一次推流。
     * @param integer $VideoFps 视频帧率。
     * @param integer $VideoRate 视频码率，单位是bps。
     * @param integer $AudioFps 音频帧率。
     * @param integer $AudioRate 音频码率，单位是bps。
     * @param integer $LocalTs 本地流逝时间，单位是ms，音视频流逝时间与本地流逝时间的差距越大表示推流质量越差，上行卡顿越严重。
     * @param integer $VideoTs 视频流逝时间，单位是ms。
     * @param integer $AudioTs 音频流逝时间，单位是ms。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("BeginPushTime",$param) and $param["BeginPushTime"] !== null) {
            $this->BeginPushTime = $param["BeginPushTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("VCodec",$param) and $param["VCodec"] !== null) {
            $this->VCodec = $param["VCodec"];
        }

        if (array_key_exists("ACodec",$param) and $param["ACodec"] !== null) {
            $this->ACodec = $param["ACodec"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("VideoFps",$param) and $param["VideoFps"] !== null) {
            $this->VideoFps = $param["VideoFps"];
        }

        if (array_key_exists("VideoRate",$param) and $param["VideoRate"] !== null) {
            $this->VideoRate = $param["VideoRate"];
        }

        if (array_key_exists("AudioFps",$param) and $param["AudioFps"] !== null) {
            $this->AudioFps = $param["AudioFps"];
        }

        if (array_key_exists("AudioRate",$param) and $param["AudioRate"] !== null) {
            $this->AudioRate = $param["AudioRate"];
        }

        if (array_key_exists("LocalTs",$param) and $param["LocalTs"] !== null) {
            $this->LocalTs = $param["LocalTs"];
        }

        if (array_key_exists("VideoTs",$param) and $param["VideoTs"] !== null) {
            $this->VideoTs = $param["VideoTs"];
        }

        if (array_key_exists("AudioTs",$param) and $param["AudioTs"] !== null) {
            $this->AudioTs = $param["AudioTs"];
        }
    }
}
