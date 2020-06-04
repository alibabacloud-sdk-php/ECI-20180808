<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\volumeMount;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe\tcpSocket;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe\exec;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe\httpGet;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\livenessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\securityContext\capability;

class container extends Model {
    protected $_name = [
        'name' => 'Name',
        'image' => 'Image',
        'cpu' => 'Cpu',
        'memory' => 'Memory',
        'workingDir' => 'WorkingDir',
        'imagePullPolicy' => 'ImagePullPolicy',
        'stdin' => 'Stdin',
        'stdinOnce' => 'StdinOnce',
        'tty' => 'Tty',
        'command' => 'Command',
        'arg' => 'Arg',
        'environmentVar' => 'EnvironmentVar',
        'port' => 'Port',
        'volumeMount' => 'VolumeMount',
        'readinessProbe' => 'ReadinessProbe',
        'livenessProbe' => 'LivenessProbe',
        'securityContext' => 'SecurityContext',
        'gpu' => 'Gpu',
    ];
    public function validate() {
        Model::validateRequired('command', $this->command, true);
        Model::validateRequired('arg', $this->arg, true);
        Model::validateRequired('environmentVar', $this->environmentVar, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('volumeMount', $this->volumeMount, true);
        Model::validateRequired('readinessProbe', $this->readinessProbe, true);
        Model::validateRequired('livenessProbe', $this->livenessProbe, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Image'] = $this->image;
        $res['Cpu'] = $this->cpu;
        $res['Memory'] = $this->memory;
        $res['WorkingDir'] = $this->workingDir;
        $res['ImagePullPolicy'] = $this->imagePullPolicy;
        $res['Stdin'] = $this->stdin;
        $res['StdinOnce'] = $this->stdinOnce;
        $res['Tty'] = $this->tty;
        $res['Command'] = [];
        if(null !== $this->command){
            $res['Command'] = $this->command;
        }
        $res['Arg'] = [];
        if(null !== $this->arg){
            $res['Arg'] = $this->arg;
        }
        $res['EnvironmentVar'] = [];
        if(null !== $this->environmentVar && is_array($this->environmentVar)){
            $n = 0;
            foreach($this->environmentVar as $item){
                $res['EnvironmentVar'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Port'] = [];
        if(null !== $this->port && is_array($this->port)){
            $n = 0;
            foreach($this->port as $item){
                $res['Port'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['VolumeMount'] = [];
        if(null !== $this->volumeMount && is_array($this->volumeMount)){
            $n = 0;
            foreach($this->volumeMount as $item){
                $res['VolumeMount'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toMap() : null;
        $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
        $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        $res['Gpu'] = $this->gpu;
        return $res;
    }
    /**
     * @param array $map
     * @return container
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Image'])){
            $model->image = $map['Image'];
        }
        if(isset($map['Cpu'])){
            $model->cpu = $map['Cpu'];
        }
        if(isset($map['Memory'])){
            $model->memory = $map['Memory'];
        }
        if(isset($map['WorkingDir'])){
            $model->workingDir = $map['WorkingDir'];
        }
        if(isset($map['ImagePullPolicy'])){
            $model->imagePullPolicy = $map['ImagePullPolicy'];
        }
        if(isset($map['Stdin'])){
            $model->stdin = $map['Stdin'];
        }
        if(isset($map['StdinOnce'])){
            $model->stdinOnce = $map['StdinOnce'];
        }
        if(isset($map['Tty'])){
            $model->tty = $map['Tty'];
        }
        if(isset($map['Command'])){
            if(!empty($map['Command'])){
                $model->command = [];
                $model->command = $map['Command'];
            }
        }
        if(isset($map['Arg'])){
            if(!empty($map['Arg'])){
                $model->arg = [];
                $model->arg = $map['Arg'];
            }
        }
        if(isset($map['EnvironmentVar'])){
            if(!empty($map['EnvironmentVar'])){
                $model->environmentVar = [];
                $n = 0;
                foreach($map['EnvironmentVar'] as $item) {
                    $model->environmentVar[$n++] = null !== $item ? environmentVar::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Port'])){
            if(!empty($map['Port'])){
                $model->port = [];
                $n = 0;
                foreach($map['Port'] as $item) {
                    $model->port[$n++] = null !== $item ? port::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['VolumeMount'])){
            if(!empty($map['VolumeMount'])){
                $model->volumeMount = [];
                $n = 0;
                foreach($map['VolumeMount'] as $item) {
                    $model->volumeMount[$n++] = null !== $item ? volumeMount::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['ReadinessProbe'])){
            $model->readinessProbe = readinessProbe::fromMap($map['ReadinessProbe']);
        }
        if(isset($map['LivenessProbe'])){
            $model->livenessProbe = livenessProbe::fromMap($map['LivenessProbe']);
        }
        if(isset($map['SecurityContext'])){
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if(isset($map['Gpu'])){
            $model->gpu = $map['Gpu'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description image
     * @var string
     */
    public $image;

    /**
     * @description cpu
     * @var float
     */
    public $cpu;

    /**
     * @description mem
     * @var float
     */
    public $memory;

    /**
     * @description workingDir
     * @var string
     */
    public $workingDir;

    /**
     * @description imagePullPolicy
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description stdin
     * @var bool
     */
    public $stdin;

    /**
     * @description stdinOnce
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description tty
     * @var bool
     */
    public $tty;

    /**
     * @description command
     * @var array
     */
    public $command;

    /**
     * @description args
     * @var array
     */
    public $arg;

    /**
     * @description env
     * @var array
     */
    public $environmentVar;

    /**
     * @description ports
     * @var array
     */
    public $port;

    /**
     * @description volumeMounts
     * @var array
     */
    public $volumeMount;

    /**
     * @description ReadinessProbe
     * @var readinessProbe
     */
    public $readinessProbe;

    /**
     * @description LivenessProbe
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @description SecurityContext
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description gpu
     * @var integer
     */
    public $gpu;

}
