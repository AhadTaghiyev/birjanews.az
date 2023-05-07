@extends('layouts.admin')

@section('content')
    @include('includes.timyeditor')

    <div class="col-sm-1"> </div>

    <div class="col-sm-10">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-white">Haqqımızda</h5>
            </div>
            <div class="card-body">
                {!! Form::model($about, ['method'=>'PATCH', 'action'=>['AdminAboutController@update', $about[0]->id]]) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#about_az">AZ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about_ru">RU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about_en">EN</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="about_az" class="tab-pane active">
                            <br />

                            <a class="btn btn-primary" data-toggle="collapse" href="#seoAZ" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                SEO tools
                            </a>
                            <hr>

                            <div class="collapse" id="seoAZ">
                                <div class="form-group">
                                    {!! Form::label('seo_title_az', 'SEO Title AZ:') !!}
                                    {!! Form::text('seo_title_az', $about[0]->seo_title_az, ['class' => ($errors->has('seo_title_az')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_title_az') }}</small>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('seo_keywords_az', 'SEO Keywords AZ:') !!}
                                    {!! Form::text('seo_keywords_az', $about[0]->seo_keywords_az, ['class' => ($errors->has('seo_keywords_az')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_keywords_az') }}</small>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('seo_desctioption_az', 'SEO Description AZ:') !!}
                                    {!! Form::text('seo_desctioption_az', $about[0]->seo_desctioption_az, ['class' => ($errors->has('seo_desctioption_az')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_desctioption_az') }}</small>
                                </div>
                                <hr/>
                            </div>

                            <div class="form-group">
                                {!! Form::label('title_az', 'Başlıq AZ:') !!}
                                {!! Form::text('title_az', $about[0]->title_az, ['class' => ($errors->has('title_az')) ? 'form-control form-error' : 'form-control']) !!}
                                <small class="text-danger">{{ $errors->first('title_az') }}</small>
                            </div>
                            <div class="form-group">
                                {!! Form::label('text_az', 'Metn AZ:') !!}
                                {!! Form::textarea('text_az', $about[0]->text_az, ['class' => ($errors->has('text_az')) ? 'form-control form-error textarea' : 'textarea form-control']) !!}
                                <small class="text-danger">{{ $errors->first('text_az') }}</small>
                            </div>
                        </div>
                        <div id="about_ru" class="tab-pane fade">
                            <br/>
                            <a class="btn btn-primary" data-toggle="collapse" href="#seoRU" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                SEO tools
                            </a>
                            <hr>
                            <div class="collapse" id="seoRU">
                                <div class="form-group">
                                    {!! Form::label('seo_title_ru', 'SEO Title RU:') !!}
                                    {!! Form::text('seo_title_ru', $about[0]->seo_title_ru, ['class' => ($errors->has('seo_title_ru')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_title_ru') }}</small>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('seo_keywords_ru', 'SEO Keywords RU:') !!}
                                    {!! Form::text('seo_keywords_ru', $about[0]->seo_keywords_ru, ['class' => ($errors->has('seo_keywords_ru')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_keywords_ru') }}</small>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('seo_desctioption_ru', 'SEO Description RU:') !!}
                                    {!! Form::text('seo_desctioption_ru', $about[0]->seo_desctioption_ru, ['class' => ($errors->has('seo_desctioption_ru')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_desctioption_ru') }}</small>
                                </div>
                                <hr/>

                            </div>

                            <div class="form-group">
                                {!! Form::label('title_ru', 'Başlıq RU:') !!}
                                {!! Form::text('title_ru', $about[0]->title_ru, ['class' => ($errors->has('title_ru')) ? 'form-control form-error' : 'form-control']) !!}
                                <small class="text-danger">{{ $errors->first('title_ru') }}</small>
                            </div>
                            <div class="form-group">
                                {!! Form::label('text_ru', 'Metn RU:') !!}
                                {!! Form::textarea('text_ru', $about[0]->text_ru, ['class' => ($errors->has('text_ru')) ? 'textarea form-control form-error' : ' textarea form-control']) !!}
                                <small class="text-danger">{{ $errors->first('text_ru') }}</small>
                            </div>
                        </div>
                        <div id="about_en" class="tab-pane fade">
                            <br/>
                            <a class="btn btn-primary" data-toggle="collapse" href="#seoEN" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                SEO tools
                            </a>
                            <hr>
                            <div class="collapse" id="seoEN">
                                <div class="form-group">
                                    {!! Form::label('seo_title_en', 'SEO Title EN:') !!}
                                    {!! Form::text('seo_title_en', $about[0]->seo_title_en, ['class' => ($errors->has('seo_title_en')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_title_en') }}</small>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('seo_keywords_en', 'SEO Keywords EN:') !!}
                                    {!! Form::text('seo_keywords_en', $about[0]->seo_keywords_en, ['class' => ($errors->has('seo_keywords_en')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_keywords_en') }}</small>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('seo_desctioption_en', 'SEO Description EN:') !!}
                                    {!! Form::text('seo_desctioption_en', $about[0]->seo_desctioption_en, ['class' => ($errors->has('seo_desctioption_en')) ? 'form-control form-error' : 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('seo_desctioption_en') }}</small>
                                </div>
                                <hr/>

                            </div>

                            <div class="form-group">
                                {!! Form::label('title_en', 'Başlıq EN:') !!}
                                {!! Form::text('title_en', $about[0]->title_en, ['class' => ($errors->has('title_en')) ? 'form-control form-error' : 'form-control']) !!}
                                <small class="text-danger">{{ $errors->first('title_en') }}</small>
                            </div>
                            <div class="form-group">
                                {!! Form::label('text_en', 'Metn EN:') !!}
                                {!! Form::textarea('text_en', $about[0]->text_en, ['class' => ($errors->has('text_en')) ? 'textarea form-control form-error' : ' textarea form-control']) !!}
                                <small class="text-danger">{{ $errors->first('text_en') }}</small>
                            </div>
                        </div>
                        <div class="col-sm-12" style="text-align: right;">
                            <div class="form-group">
                                {!!  Form::submit('Yenilə', ['class'=>'btn btn-primary col-sm-2']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>


@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#slidertable').DataTable();
        } );
    </script>
@stop
