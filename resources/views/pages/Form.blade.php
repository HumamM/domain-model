@extends('layouts.default')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
            <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Lesson Number</label>
                      <input type="text" class="form-control" id="lesson-number" placeholder="Lesson Number">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="text">Lesson Title</label>
                      <input type="text" class="form-control" id="lesson-title" placeholder="Lesson Title">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="text">Concept</label>
                      <input type="text" class="form-control" id="concept" placeholder="Concept">
                    </div>
                    

                    

                    <div class="form-group col-md-6">
                      <label for="inputState">Learning Goal</label>
                      <select id="learning-goal" class="form-control">
                        <option selected>Choose...</option>
                        <option>Knowledge</option>
                        <option>Comperhension</option>
                        <option>Application</option>
                      </select>
                    </div>
                  
                  
                  <div class="form-group col-md-6">
                      <label for="inputState">Level of Knowledge</label>
                      <select id="level-of-knowledge" class="form-control">
                        <option selected>Choose...</option>
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                      </select>
                    </div>
                  
                  
                  <div class="form-group col-md-6">
                      <label for="inputState">File Type</label>
                      <select id="file-type" class="form-control">
                        <option selected>Choose...</option>
                        <option>Video</option>
                        <option>Sound</option>
                        <option>Simulation</option>
                        <option>Text</option>
                      </select>
                    </div>
</div>
                  
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                
        </div>
    </div>
</body>
</html>