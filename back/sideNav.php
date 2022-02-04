<div id="lf" style="float:left;">
                <div id="menuput" class="border border-secondary">
                    <!--主選單放此-->

                    <h5 class="text-center my-3 t">主選單區</h5>

                    <a href="?do=title">
                        <button type="button" class="btn btn-purple btn-block my-2">HEADER</button>
                    </a>

                    <a href="?do=me">
                        <button type="button" class="btn btn-purple btn-block my-2">ME</button>
                    </a>

                    <a href="?do=collection">
                        <button type="button" class="btn btn-purple btn-block my-2">COLLECTION</button>
                    </a>

                    <a href="?do=skills">
                        <button type="button" class="btn btn-purple btn-block my-2">SKILLS</button>
                    </a>

                    <a href="?do=bottom">
                        <button type="button" class="btn btn-purple btn-block my-2">FOOTER</button>
                    </a>

                    <a href="?do=admin">
                        <button type="button" class="btn btn-purple btn-block my-2">USERS</button>
                    </a>

                </div>
                <div class="border border-secondary" style="margin:3px; width:100%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :<?= $Total->find(1)['total']; ?></span>
                </div>
            </div>