<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form class="form-horizontal mx-auto" method="post" action="result.php">
            <fieldset>
                <h1 class="text-center">Registration Form</h1>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
                    <div class="col-md-4">
                        <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="umur">Umur</label>  
                    <div class="col-md-4">
                        <input id="umur" name="umur" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>  
                    <div class="col-md-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="male"> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female"> Female
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="pendidikan">Pendidikan</label>  
                    <div class="col-md-4">
                        <select id="pendidikan" name="pendidikan" class="form-control">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="d3">Diploma 3</option>
                            <option value="s1">Sarjana (S1)</option>
                            <option value="s2">Magister (S2)</option>
                            <option value="s3">Doktor (S3)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
    <label class="col-md-4 control-label">Hobi</label>  
    <div class="col-md-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobi[]" value="membaca"> Membaca Buku
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobi[]" value="traveling"> Traveling
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobi[]" value="olahraga"> Olahraga
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobi[]" value="nonton"> Nonton
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobi[]" value="hiking"> Hiking
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobi[]" value="mancing"> Mancing
            </label>
        </div>
    </div>
</div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="button"></label>
                    <div class="col-md-4">
                        <button id="button" name="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
