<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#agregar">Agregar Producto</a></li>
                        <li><a href="#listar"> Ver Mis Productos</a></li>
                        <li><a href="#datos"> Ver Mis Datos</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="agregar">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="firstname" type="text" class="form-control" placeholder="Titulo">
                                                        </div>
                                                        <div class="form-group res-mg-t-15">
                                                            <textarea name="description" placeholder="Descripción"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="gender" class="form-control">
                                                                <option value="none" selected="" disabled="">Categoría</option>
                                                                <option value="0">Male</option>
                                                                <option value="1">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="mobileno" type="number" class="form-control" placeholder="Precio Unitario">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="finish" id="finish" type="text" class="form-control" placeholder="Stock">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                        <div class="form-group alert-up-pd">
                                                            <div class="dz-message needsclick download-custom">
                                                                <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                </p>
                                                                <input name="imageico" class="hd-pro-img" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="department" type="text" class="form-control" placeholder="Department">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="website" type="text" class="form-control" placeholder="Website URL">
                                                        </div>
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Subir Producto</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="listar">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <div id="toolbar">
                                                            <select class="form-control dt-tb">
                                                                <option value="">Export Basic</option>
                                                                <option value="all">Export All</option>
                                                                <option value="selected">Export Selected</option>
                                                            </select>
                                                        </div>
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="id">ID</th>
                                                                    <th data-field="name" data-editable="true">Task</th>
                                                                    <th data-field="email" data-editable="true">Email</th>
                                                                    <th data-field="phone" data-editable="true">Phone</th>
                                                                    <th data-field="complete">Completed</th>
                                                                    <th data-field="task" data-editable="true">Task</th>
                                                                    <th data-field="date" data-editable="true">Date</th>
                                                                    <th data-field="price" data-editable="true">Price</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>1</td>
                                                                    <td>Web Development</td>
                                                                    <td>admin@uttara.com</td>
                                                                    <td>+8801962067309</td>
                                                                    <td class="datatable-ct"><span class="pie">1/6</span>
                                                                    </td>
                                                                    <td>10%</td>
                                                                    <td>Jul 14, 2017</td>
                                                                    <td>$5455</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>2</td>
                                                                    <td>Graphic Design</td>
                                                                    <td>fox@itpark.com</td>
                                                                    <td>+8801762067304</td>
                                                                    <td class="datatable-ct"><span class="pie">230/360</span>
                                                                    </td>
                                                                    <td>70%</td>
                                                                    <td>fab 2, 2017</td>
                                                                    <td>$8756</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>3</td>
                                                                    <td>Software Development</td>
                                                                    <td>gumre@hash.com</td>
                                                                    <td>+8801862067308</td>
                                                                    <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                                                    </td>
                                                                    <td>5%</td>
                                                                    <td>Seb 5, 2017</td>
                                                                    <td>$9875</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>4</td>
                                                                    <td>Woocommerce</td>
                                                                    <td>kyum@frok.com</td>
                                                                    <td>+8801962066547</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Oct 10, 2017</td>
                                                                    <td>$3254</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>5</td>
                                                                    <td>Joomla</td>
                                                                    <td>jams@game.com</td>
                                                                    <td>+8801962098745</td>
                                                                    <td class="datatable-ct"><span class="pie">200,133</span>
                                                                    </td>
                                                                    <td>80%</td>
                                                                    <td>Nov 20, 2017</td>
                                                                    <td>$58745</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>6</td>
                                                                    <td>Wordpress</td>
                                                                    <td>flat@yem.com</td>
                                                                    <td>+8801962254781</td>
                                                                    <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                                                    </td>
                                                                    <td>30%</td>
                                                                    <td>Aug 25, 2017</td>
                                                                    <td>$789879</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>7</td>
                                                                    <td>Ecommerce</td>
                                                                    <td>hasan@wpm.com</td>
                                                                    <td>+8801962254863</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>July 17, 2017</td>
                                                                    <td>$21424</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>8</td>
                                                                    <td>Android Apps</td>
                                                                    <td>ATM@devep.com</td>
                                                                    <td>+8801962875469</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>June 11, 2017</td>
                                                                    <td>$78978</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>9</td>
                                                                    <td>Prestashop</td>
                                                                    <td>presta@Prest.com</td>
                                                                    <td>+8801962067524</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>May 9, 2017</td>
                                                                    <td>$45645</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>10</td>
                                                                    <td>Game Development</td>
                                                                    <td>Dev@game.com</td>
                                                                    <td>+8801962067457</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>April 5, 2017</td>
                                                                    <td>$4564545</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>11</td>
                                                                    <td>Angular Js</td>
                                                                    <td>gular@angular.com</td>
                                                                    <td>+8801962067124</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Dec 1, 2017</td>
                                                                    <td>$645455</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>12</td>
                                                                    <td>Opencart</td>
                                                                    <td>open@cart.com</td>
                                                                    <td>+8801962067587</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Jan 6, 2017</td>
                                                                    <td>$78978</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>13</td>
                                                                    <td>Education</td>
                                                                    <td>john@example.com</td>
                                                                    <td>+8801962067471</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Feb 6, 2016</td>
                                                                    <td>$456456</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>14</td>
                                                                    <td>Construction</td>
                                                                    <td>mary@example.com</td>
                                                                    <td>+8801962012457</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Jan 6, 2016</td>
                                                                    <td>$87978</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>15</td>
                                                                    <td>Real Estate</td>
                                                                    <td>july@example.com</td>
                                                                    <td>+8801962067309</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Dec 1, 2016</td>
                                                                    <td>$454554</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>16</td>
                                                                    <td>Personal Regume</td>
                                                                    <td>john@example.com</td>
                                                                    <td>+8801962067306</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>May 9, 2016</td>
                                                                    <td>$564555</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>17</td>
                                                                    <td>Admin Template</td>
                                                                    <td>mary@example.com</td>
                                                                    <td>+8801962067305</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>June 11, 2016</td>
                                                                    <td>$454565</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>18</td>
                                                                    <td>FrontEnd</td>
                                                                    <td>july@example.com</td>
                                                                    <td>+8801962067304</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>May 9, 2015</td>
                                                                    <td>$456546</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>19</td>
                                                                    <td>Backend</td>
                                                                    <td>john@range.com</td>
                                                                    <td>+8801962067303</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Feb 9, 2014</td>
                                                                    <td>$564554</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>20</td>
                                                                    <td>Java Advance</td>
                                                                    <td>lamon@ghs.com</td>
                                                                    <td>+8801962067302</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>July 6, 2014</td>
                                                                    <td>$789889</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>21</td>
                                                                    <td>Jquery Advance</td>
                                                                    <td>hasad@uth.com</td>
                                                                    <td>+8801962067301</td>
                                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                                    </td>
                                                                    <td>15%</td>
                                                                    <td>Jun 6, 2013</td>
                                                                    <td>$4565656</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="datos">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Apellido">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="RUT">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Nacionalidad">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Dirección">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Correo">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Contraseña">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Confirmar Contraseña">
                                                        </div>
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Actualizar Datos</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>



                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
