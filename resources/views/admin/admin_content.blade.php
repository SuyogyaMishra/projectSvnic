@extends('layouts.adminApp')
@section('content')
<div id="content-section" class="content-section" style="margin-top: 56px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Website Content Management</h1>
        <button type="submit" form="webForm" class="btn btn-primary">Save Changes</button>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Homepage Content</h5>
                </div>
                <form id="webForm" action="{{ route("updateweb") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="heroTitle" class="form-label">Hero Title</label>
                            <input type="text" class="form-control" id="heroTitle" name="heroTitle" value="Welcome to SVNIC">
                        </div>

                        <div class="mb-3">
                            <label for="heroDescription" class="form-label">Hero Description</label>
                            <textarea class="form-control" id="heroDescription" name="heroDescription" rows="3">
                                              Nurturing young minds from Nursery to Grade 12 with excellence, compassion, and innovation.
                                             </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="schoolStats" class="form-label">School Statistics</label>
                            <div class="row">
                                <div class="col-4">
                                    <input type="number" class="form-control" name="years" placeholder="Years" value="25">
                                    <small class="text-muted">Years</small>
                                </div>
                                <div class="col-4">
                                    <input type="number" class="form-control" name="students" placeholder="Students" value="1200">
                                    <small class="text-muted">Students</small>
                                </div>
                                <div class="col-4">
                                    <input type="number" class="form-control" name="success" placeholder="Success %" value="95">
                                    <small class="text-muted">Success %</small>
                                </div>
                                <div class="mb-3">
                                    <label for="schoolPic" class="form-label">Hero pic</label>
                                    <input type="file" class="form-control" id="schoolPic" name="schoolPic" placeholder="upload hero pic">
                                    +
                                </div>
                            </div>
                        </div>


                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">About Section</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="mission" class="form-label">Mission Statement</label>
                        <textarea form="webForm" name="mission" class="form-control" id="mission" rows="3">To provide quality education that empowers students to become confident, creative, and compassionate global citizens.</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="vision" class="form-label">Vision Statement</label>
                        <textarea form="webForm" name="vision" class="form-control" id="vision" rows="3">To be a leading educational institution that inspires lifelong learning, critical thinking, and social responsibility.</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection