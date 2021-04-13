
        <div class="main-wrapper">
            <form method="POST">
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Documentos ao Aluno </h5>
                                <p>Area destinada ao cadastro de documentos para o aluno.</p>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Documento</label>
                                        <select id="inputState" class="form-control custom-select" name="documento">
                                            <option value=""></option>
                                            <!-- Foreach com os modelos de documentos -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Aluno:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="aluno">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Solicitar</label>
                                        <select id="inputState" class="form-control custom-select" name="solicitar">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                            <!-- Foreach com os modelos de documentos -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Arquivo:</label>
                                        <input type="file" class="form-control form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp" name="arquivo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar Documento</button>

            </form>
            
        </div>
    </div>
