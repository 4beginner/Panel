{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- Permission is hereby granted, free of charge, to any person obtaining a copy --}}
{{-- of this software and associated documentation files (the "Software"), to deal --}}
{{-- in the Software without restriction, including without limitation the rights --}}
{{-- to use, copy, modify, merge, publish, distribute, sublicense, and/or sell --}}
{{-- copies of the Software, and to permit persons to whom the Software is --}}
{{-- furnished to do so, subject to the following conditions: --}}

{{-- The above copyright notice and this permission notice shall be included in all --}}
{{-- copies or substantial portions of the Software. --}}

{{-- THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR --}}
{{-- IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, --}}
{{-- FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE --}}
{{-- AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER --}}
{{-- LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, --}}
{{-- OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE --}}
{{-- SOFTWARE. --}}
@extends('layouts.error')

@section('title')
    @lang('base.errors.404.header')
@endsection

@section('content-header')
@endsection

@section('content')
<!-- This is why we don't let Pterodactyl's make links... fat fingered dinosaurs... -->
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="box box-warning">
            <div class="box-body text-center">
                <h1 class="text-yellow" style="font-size: 160px !important;font-weight: 100 !important;">404</h1>
                <p class="text-muted">@lang('base.errors.404.desc')</p>
            </div>
            <div class="box-footer with-border">
                <a href="{{ URL::previous() }}"><button class="btn btn-warning">&larr; @lang('base.errors.return')</button></a>
                <a href="/"><button class="btn btn-default">@lang('base.errors.home')</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
