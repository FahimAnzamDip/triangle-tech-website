@extends('admin.layouts.admin-layout')

@section('backend-styles')
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>As Regards Of TTL</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">As Regards Of TTL</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="{{ route('regards.update', $regard->id) }}">
                            @csrf
                            <div class="card-header">
                                <h4>Edit As Regards Of TTL</h4>
                            </div>
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>As Regards Of TTL <span class="text-danger">*</span></label>
                                            <textarea id="ckeditor" name="regards_content">{{ $regard->regards_content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right pt-0">
                                <button class="btn btn-primary" type="submit">Update Regards</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('backend-scripts')
    <script src="//cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create(document.querySelector('#ckeditor'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                    heading: {
                        options: [
                            {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                            {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                            {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'}
                        ]
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        });
    </script>
@endsection
