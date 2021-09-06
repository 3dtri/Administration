
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">
                @if($formMode=='Ajout')
                Nouvelle fiche categorie
                @else
                Modifier {{$categorie->name}}
                @endif
              </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
           
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom du categorie</label>
                  <input type="text" value="{{ isset($categorie) ? $categorie->name : '' }}" class="form-control" name="name"  placeholder="Enter nom du cat">
                </div>
               
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
              </div>
           
          </div>
          <!-- /.card -->

       

      
        

        </div>
        <!--/.col (left) -->
      
      </div>
      <!-- /.row -->
 



