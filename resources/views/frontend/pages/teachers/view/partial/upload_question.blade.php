



          <section id="sections" class=" bg-faded">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <a href="#" class="btn btn-md btn-warning btn-block mt-1 mb-1" data-toggle="modal" data-target="#uploadfileModal">
                                    <i class="fa fa-folder mr-1"></i> Upload file
                                </a>
                            </div>
                        </div>
                    </div>

                </section>

<div class="modal fade" id="uploadfileModal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title">Upload your file</h5>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                           
                            <div class="form-group">
                                <label for="sname" class="form-control-label">Subject Name</label>
                                <input type="text" name="sname" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="coursecode" class="form-control-label">Course Code</label>
                                <input type="text" name="coursecode" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="title" class="form-control-label">Term</label>
                                <select name="title" class="form-control">
                                    <option>Midterm</option>
                                    <option>Final</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="term" class="form-control-label">Passing year</label>
                                <select name="term" class="form-control">
                                    <option>Spring 2017</option>
                                    <option>Summer 2017</option>
                                    <option>Fall 2017</option>
                                    <option>Spring 2018</option>
                                    <option>Summer 2018</option>
                                    <option>Fall 2018</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="question">Upload Question</label>
                                <div class="col-md-5">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                                 <div class="col-md-5">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                                 <div class="col-md-5">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                                 
                                <small class="form-text text-muted"> Max 5MB</small>
                            </div>
                            <div class="form-group">
                                <label for="comment">Body</label>
                                <textarea name="editor1" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="upload" class="btn btn-warning" data-dismiss="modal">Upload</button>
                    </div>
                </div>
            </div>
        </div>