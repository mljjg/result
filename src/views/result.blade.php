@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">结果 Result</div>

                    <div class="panel-body">
                        <div>
                            @if($result)
                                <div>
                                    <ul>
                                        <li><label>Code:</label><span> {{ $result['code'] }}</span></li>
                                        <li><label>Message:</label><span> {{ $result['message'] }}</span></li>
                                        <li><label>isSuccess:</label><span> {{ $result['success'] }}</span></li>
                                        <li><label>Model:</label><span> {{ $result['model'] }}</span></li>

                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">结果 Result</div>

                    <div class="panel-body">
                        结果：
                        <div>
                            @php
                                $result=new \Ml\Result\Lib\Response\Result();
                            @endphp

                            @if($result)
                                <div>
                                    <ul>
                                        <li><label>Code:</label><span> {{ $result->getCode() }}</span></li>
                                        <li><label>Message:</label><span> {{ $result->getMessage() }}</span></li>
                                        <li><label>isSuccess:</label><span> {{ $result->isSuccess() }}</span></li>
                                        <li><label>Model:</label><span> {{ $result->getModel() }}</span></li>

                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
