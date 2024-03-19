@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-right">
                            <h4 class="card-title">{{ @$title }}</h4>
                            <a href="{{ route('admin.content-management.manage-page.list') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-list"></i> Page List</a>
                        </div>
                        <div class="card-body">
                            <form id="submitForm" action="{{ !empty($editData) ? route('admin.content-management.manage-page.update', $editData->id) : route('admin.content-management.manage-page.store') }}"
								method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" id="title"
                                            value="{{ @$editData->title ?? old('title') }}"
                                            class="form-control form-control-sm title" placeholder="Title">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label">Status</label>
                                        <select name="status" id="status"
                                            class="form-control form-control-sm status select2">
                                            <option value="1" {{ @$editData->status == '1' ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0" {{ @$editData->status == '0' ? 'selected' : '' }}>
                                                Inactive</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label class="control-label">Description</label>
										<textarea type="text" class="form-control"
											name="description">{{ !empty(@$editData->description) ? @$editData->description : old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-sm-12">
                                        <div class="form-group text-right">
                                            @if (@$editData->id)
                                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                                            @else
                                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                                                <button type="reset" class="btn btn-danger btn-sm">Clear</button>
                                            @endif
                                            <button type="button" class="btn btn-default btn-sm ion-android-arrow-back">
                                                <a href="{{ route('admin.content-management.manage-page.list') }}">Back</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{ asset('extra-plugins') }}/colorpicker/js/colorpicker.js"></script>
    <script>
        $(function() {
            $('.colorpicker-component').colorpicker({
                customClass: 'custom-size',
                sliders: {
                    saturation: {
                        maxLeft: 250,
                        maxTop: 250
                    },
                    hue: {
                        maxTop: 250
                    },
                    alpha: {
                        maxTop: 250
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#submitForm').validate({
                ignore: [],
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                errorClass: 'text-danger',
                validClass: 'text-success',
            });

            jQuery.validator.addClassRules({
                'title': {
                    required: true,
                }
            });
        });
    </script>
@endsection
