<div class="content">
    <br>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>/Syllabus">Current</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo BASE_URL?>/Syllabus/syllabusUpdate">Update</a>
        </li>
    </ul>
    <br>
    <form>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Year - Term</label>
            <div class="col-sm-10">
                <select class="form-control" id="singleselect">
                    <?php
                    foreach ($data[0] as $key => $value){
                        ?>
                        <option value="<?php echo $value['id']?>"><?php echo $value['year']." year ".$value['term']." term" ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Syllabus</label>
            <div class="col-sm-10">
                <select class="form-control" id="singleselect">
                    <?php
                    foreach ($data[1] as $key => $value){
                        ?>
                        <option value="<?php echo $value['id']?>"><?php echo $value['syllabus_Name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button class="btn btn-outline-customs ">Search</button>
            </div>
        </div>
    </form>
    <br>
    <table class="table table-striped ">
        <thead>
        <tr>
            <th>Course No</th>
            <th>Course Title</th>
            <th>Credit</th>
            <th>Type</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr><tr>
            <td>1101</td>
            <td>Structured Programming</td>
            <td>3.00</td>
            <td>Must</td>
        </tr>
        </tbody>
    </table>
    <br>
</div>