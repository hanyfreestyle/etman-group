@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <x-html-section-with-card>
        <div class="col-lg-12 pt-3">
            <div class="alert alert-dark alert-dismissible">
                {{ __('admin/menu.web_category') }}
            </div>
            <x-def-settings modelname="BannerCat"  :filterid="false" >

            </x-def-settings>

        </div>
    </x-html-section-with-card>

    <x-html-section-with-card>
        <div class="col-lg-12 pt-3">
            <div class="alert alert-dark alert-dismissible">
                {{ __('admin/menu.web_banner') }}
            </div>
            <x-def-settings modelname="Banner" :orderby-postion="true" >

            </x-def-settings>
        </div>
    </x-html-section-with-card>














@endsection
