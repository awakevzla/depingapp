<html lang="en"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/bootstrap/bootstrap-theme.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">

    <script src="{{URL::to('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.js')}}"></script>
</head>
<body ng-app="taskTracker" class="ng-scope">
<div id="wrapper">
    <div id="sidebar-wrapper" class="ng-scope">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#">Deping Store</a></li>
            <li><a class="inbox_icon">Inbox</a><div class="todo-badge ng-binding">1</div></li>
            <li><a class="all_icon">All Tasks</a><div class="todo-badge ng-binding">3</div></li>
            <li><a class="pending_icon">All Pending</a><div class="todo-badge ng-binding">2</div></li>
            <li><br></li>

            <!-- ngRepeat: label in labels --><li class="ng-scope">
                <div class="circle color_red"></div>
                <a class="ng-binding">Work</a>
                <div class="todo-badge ng-binding">1</div>
            </li><!-- end ngRepeat: label in labels --><li class="ng-scope">
                <div class="circle color_green"></div>
                <a class="ng-binding">Home</a>
                <div class="todo-badge ng-binding">1</div>
            </li><!-- end ngRepeat: label in labels --><li class="ng-scope">
                <div class="circle color_blue"></div>
                <a class="ng-binding">Personal</a>
                <div class="todo-badge ng-binding">0</div>
            </li><!-- end ngRepeat: label in labels -->
        </ul>
    </div>
    <div id="page-content-wrapper" class="ng-scope">
        <div class="panel panel-default bg-container">
            <div class="panel-body">
                <div class="panel-top-header padding-header">
                    <form class="form-horizontal form-padding ng-pristine ng-valid">
                        <div class="row height-65">
                            <label class="col-sm-1 filter-text">Filter By :</label>
                            <div class="col-sm-2 filter-input"><input type="text" class="form-control ng-pristine ng-untouched ng-valid"></div>
                            <button type="button" id="btnCreateLabel" class="btn btn-danger pull-right btn-task-category">Create Label</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- uiView: undefined --><ui-view class="ng-scope"><div class="padding-20 ng-scope">
                <div class="panel panel-default bg-update">
                    <div class="panel-body">
                        <div class="panel-top-header ng-binding">
                            Inbox
                            <i class="fa fa-pencil-square-o pull-right action-icon"></i>
                        </div>

                        <div class="padding-20">
                            <form class="form-horizontal form-padding padding-bottom-20 ng-pristine ng-valid">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-create-task ng-pristine ng-untouched ng-valid" placeholder="Create New Task">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-info pull-right">Add Task</button>
                                    </div>
                                </div>
                            </form>

                            <ul class="list-group">
                                <!-- ngRepeat: task in tasks|filter:filterText:strict --><li class="list-group-item ng-scope">
                                    <input id="7" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                                    <label for="7" class="checkbox-label ng-binding">Send Status Report</label>
                                    <span class="glyphicon glyphicon-trash pull-right action-icon" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-pencil pull-right action-icon" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-star-empty pull-right action-icon" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-time pull-right action-icon" aria-hidden="true"></span>
                                </li><!-- end ngRepeat: task in tasks|filter:filterText:strict -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div></ui-view>
    </div>
</div>

</body></html>