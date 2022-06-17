  <div class="form-group">
		             <label for="">Tipe Kriteria</label>
		            <div class="col-sm-10">
                 <div class="form-check-inline">
                    <label class="from-check-label" for="radio1">
                      <input type="radio" class="from-check-input"id="radio1"name="tipe_kriteria" value="benefit" checked>Benefit 
                  </label>
                </div>
                <div class="form-check-inline">
                    <label class="from-check-label" for="radio1">
                      <input type="radio" class="from-check-input"id="radio1"name="tipe_kriteria" value="cost"> Cost
                  </label>
                </div>
              </div>
		         </div>



             <!-- codingan editnya -->
              <div class="form-group">  
                  <label for="">Tipe Kriteria</label>
                  <div class="col-sm-10">
                 <div class="form-check-inline">
                    <label class="from-check-label" for="radio1">
                      <input type="radio" class="from-check-input"id="radio1"name="tipe_kriteria" value="benefit" <?php if($data['tipe_kriteria']=='benefit') echo 'checked'?>>Benefit 
                  </label>
                </div>
                <div class="form-check-inline">
                    <label class="from-check-label" for="radio1">
                      <input type="radio" class="from-check-input"id="radio1"name="tipe_kriteria" value="cost" <?php if($data['tipe_kriteria']=='cost') echo 'checked'?>> Cost
                  </label>
                </div>
              </div>
           </div>