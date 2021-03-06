<!--main content start-->
<div id="content" class="ui-content">
    <div class="ui-content-body">
        <div class="ui-container">
            <!--page title and breadcrumb start -->
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-title"> Editar Plan
                        <small>editar un plan registrado</small>
                    </h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb pull-right">
                        <li>Home</li>
                        <li>Plano</li>
                        <li><a href="<?php echo base_url('admin/planos/editar/'.$this->uri->segment(4));?>" class="active">Editar Plan</a></li>
                    </ul>
                </div>
            </div>
            <!--page title and breadcrumb end -->
            
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body">

                        <form action="" method="post" class="form-horizontal form-variance">
                          
                          <?php if(isset($message)) echo $message;?>
                          
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Nombre del Plan</label>
                              <div class="col-sm-6">
                                    <input type="text" name="nome" class="form-control" value="<?php echo $plano->nome;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Valor</label>
                              <div class="col-sm-6">
                                    <input type="text" name="valor" class="form-control" value="<?php echo $plano->valor;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Porcentaje de bin??rio</label>
                              <div class="col-sm-6">
                                    <input type="text" name="binario" class="form-control" value="<?php echo $plano->binario;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Puntos para el plan de carreira</label>
                              <div class="col-sm-6">
                                    <input type="text" name="pontos" class="form-control" value="<?php echo $plano->plano_carreira;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Red de Afiliados</label>
                              <div class="col-sm-6">
                                    <input type="radio" name="rede" value="1" <?php echo ($plano->rede_afiliados == 1) ? 'checked' : '';?>> Sim
                                    <input type="radio" name="rede" value="0" <?php echo ($plano->rede_afiliados == 0) ? 'checked' : '';?>> N??o
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Techo Bin??rio</label>
                              <div class="col-sm-6">
                                    <input type="text" name="teto_binario" class="form-control" value="<?php echo $plano->teto_binario;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Ganancias Di??rios</label>
                              <div class="col-sm-6">
                                    <input type="text" name="ganhos_diarios" class="form-control" value="<?php echo $plano->ganhos_diarios;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Plan Recomendado?</label>
                              <div class="col-sm-6">
                                    <input type="radio" name="recomendado" value="1" <?php echo ($plano->recomendado == 1) ? 'checked' : '';?>> Sim
                                    <input type="radio" name="recomendado" value="0" <?php echo ($plano->recomendado == 0) ? 'checked' : '';?>> N??o
                              </div>
                          </div>
							
						  <div class="form-group">
                              <label class="col-sm-3 control-label">Plan Image</label>
                              <div class="col-sm-6">
                                  
								  <?php
								  
								  $imgPlan = $plano->img_plan;
								  
								  if($imgPlan!=""){
									  $imgPlan = $plano->img_plan;
								  }else{
									 $imgPlan = "no-image.jpg"; 
								  }
								  
								  ?>
								  
								  
								  	<p>Current image</p>
                 					 <img src="<?php echo base_url();?>assets/imgs/plan/<?php echo $imgPlan;?>" height="100" width="100" 
										   id="img_actual" class="imgEdCar">
                 					<input type="hidden" id="img" name="img_plan" value="<?php echo $imgPlan;?>" >
                 					<div id="fileuploader">Upload Plan image</div>
									<div id="eventsmessage"></div>
								  
                              </div>
                          </div>	

                          <div class="form-group">
                              <label class="col-sm-3 control-label">&nbsp;</label>
                              <div class="col-sm-6">
                                    <input type="submit" name="submit" class="btn btn-success" value="Editar Plan">
                              </div>
                          </div>

                        </form>

                        </div>
                    </section>
                </div>
            </div>

        </div>

    </div>
</div>
<!--main content end-->