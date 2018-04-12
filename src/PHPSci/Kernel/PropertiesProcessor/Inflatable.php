<?php
/*
 * Copyright 2018 Henrique Borba and contributors
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PHPSci\Kernel\PropertiesProcessor;

/**
 * Trait Inflatable
 *
 * Dynamic properties.
 *
 * @author  Henrique Borba <henrique.borba.dev@gmail.com>
 * @package PHPSci\Kernel\PropertiesProcessor
 */
trait Inflatable
{
    /**
     * Emulates properties based on available classes.
     *
     * @author Henrique Borba <henrique.borba.dev@gmail.com>
     * @param  $name
     * @return mixed
     */
    public function __get($name)
    {
        return call_user_func('PHPSci\\Kernel\\PropertiesProcessor\\'.$name.'::run', $this);
    }
}
