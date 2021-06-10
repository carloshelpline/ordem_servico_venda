
<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

        <?php if ($message = $this->session->flashdata('sucesso')): ?>

            <div class="row">
                <div class="col-md-12">

                    <!-- &nbsp; coloca um espaço  -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message; ?></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

            </div>

        <?php endif; ?>

        <?php if ($message = $this->session->flashdata('error')): ?>

            <div class="row">
                <div class="col-md-12">

                    <!-- &nbsp; coloca um espaço  -->
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

            </div>

        <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <div class="form-group row mb-3">

                        <div class="col-md-3">
                            <label>Razão social</label>
                            <input type="text" class="form-control form-control-user"  name="sistema_razao_social" placeholder="Razão social" value="<?php echo $sistema->sistema_razao_social; ?>"> <!-- form-control-user Usa o Layout "user" do css -->
                            <?php echo form_error('sistema_razao_social', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo sistema_razao_social -->
                        </div>

                        <div class="col-md-3">
                            <label>Nome de fantasia</label>
                            <input type="text" class="form-control form-control-user" name="sistema_nome_fantasia" placeholder="Nome de Fantasia" value="<?php echo $sistema->sistema_nome_fantasia; ?>">
                            <?php echo form_error('sistema_nome_fantasia', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-3">
                            <label>CNPJ</label>
                            <input type="text" class="form-control form-control-user cnpj" name="sistema_cnpj" placeholder="CNPJ" value="<?php echo $sistema->sistema_cnpj; ?>">
                            <?php echo form_error('sistema_cnpj', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-3">
                            <label>Inscrição Estadual</label>
                            <input type="text" class="form-control form-control-user" name="sistema_ie" placeholder="Inscrição estadual" value="<?php echo $sistema->sistema_ie; ?>">
                            <?php echo form_error('sistema_ie', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                    </div>    

                    <div class="form-group row mb-3"> 

                        <div class="col-md-3">
                            <label>Telefone Fixo</label>
                            <input type="text" class="form-control form-control-user phone_with_ddd" name="sistema_telefone_fixo" placeholder="Telefone Fixo" value="<?php echo $sistema->sistema_telefone_fixo; ?>">
                            <?php echo form_error('sistema_telefone_fixo', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-3">
                            <label>Celular</label>
                            <input type="text" class="form-control form-control-user phone_with_ddd" name="sistema_telefone_movel" placeholder="Celular" value="<?php echo $sistema->sistema_telefone_movel; ?>">
                            <?php echo form_error('sistema_telefone_movel', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-3">
                            <label>E-mail&nbsp;(Login)</label>
                            <input type="email" class="form-control form-control-user" name="sistema_email" placeholder="Seu e-mail" value="<?php echo $sistema->sistema_email; ?>">
                            <?php echo form_error('sistema_email', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo email -->
                        </div>

                        <div class="col-md-3">
                            <label>Site</label>
                            <input type="text" class="form-control form-control-user" name="sistema_site_url" placeholder="Digite Site" value="<?php echo $sistema->sistema_site_url; ?>">
                            <?php echo form_error('sistema_site_url', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                    </div>

                    <div class="form-group row mb-3"> 

                        <div class="col-md-4">
                            <label>Endereço</label>
                            <input type="text" class="form-control form-control-user" name="sistema_endereco" placeholder="Digite Endereço" value="<?php echo $sistema->sistema_endereco; ?>">
                            <?php echo form_error('sistema_endereco', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-2">
                            <label>CEP</label>
                            <input type="text" class="form-control form-control-user cep" name="sistema_cep" placeholder="Digite CEP" value="<?php echo $sistema->sistema_cep; ?>">
                            <?php echo form_error('sistema_cep', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-2">
                            <label>Numero</label>
                            <input type="text" class="form-control form-control-user" name="sistema_numero" placeholder="Digite numero" value="<?php echo $sistema->sistema_numero; ?>">
                            <?php echo form_error('sistema_numero', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-2">
                            <label>Cidade</label>
                            <input type="text" class="form-control form-control-user" name="sistema_cidade" placeholder="Digite Cidade" value="<?php echo $sistema->sistema_cidade; ?>">
                            <?php echo form_error('sistema_cidade', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                        <div class="col-md-2">
                            <label>UF</label>
                            <input type="text" class="form-control form-control-user uf" name="sistema_estado" placeholder="Digite UF" value="<?php echo $sistema->sistema_estado; ?>">
                            <?php echo form_error('sistema_estado', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                    </div>

                    <div class="form-group row mb-3"> 

                        <div class="col-md-12">
                            <label>Texto da ordem de serviço</label>
                            <textarea type="text" class="form-control form-control-user" name="sistema_txt_ordem_servico" placeholder="Texto da ordem de serviço e venda"><?php echo $sistema->sistema_txt_ordem_servico; ?></textarea>
                            <?php echo form_error('sistema_txt_ordem_servico', '<small class="form-text text-danger">', '</small>') ?> <!-- Valida o campo first_name -->
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</html>