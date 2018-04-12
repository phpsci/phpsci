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

namespace PHPSci\Kernel\LinearAlgebra;

/**
 * Class BaseLinalg
 *
 * @category Linear_Algebra_Operations
 * @package  PHPSci\Kernel\LinearAlgebra
 * @author   Henrique Borba <henrique.borba.dev@gmail.com>
 * @license  Apache 2.0
 * @link     https://www.github.com/phpsci/phpsci
 */
abstract class BaseLinalg implements Operation
{
    /**
     * Parameters passed by users for operations
     *
     * @var mixed
     */
    protected $params;

    /**
     * BaseLinalg constructor.
     *
     * @author Henrique Borba <henrique.borba.dev@gmail.com>
     * @return void
     */
    public function __construct()
    {
        $a = func_get_args();
        $this->params = $a;
    }
}
