<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar of-y-hidden">
	<div data-simplebar class="h-100">

		<ul class="app-menu">
			<li><a class="app-menu__item active" href="{{ route('admin.home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Project</span><i class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="
					{{ route('admin.project.index') }}"><i class="icon fa fa-circle-o"></i> Project List</a></li>
					<li><a class="treeview-item" href="{{ route('admin.project.add') }}"><i class="icon fa fa-circle-o"></i> Add Project</a></li>
				</ul>
			</li>
			<li><a class="app-menu__item active" href="{{ route('admin.proposal.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Proposal</span></a></li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Technology</span><i class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="
					{{ route('admin.technology.index') }}"><i class="icon fa fa-circle-o"></i> Technology List</a></li>
					<li><a class="treeview-item" href="{{ route('admin.technology.add') }}"><i class="icon fa fa-circle-o"></i> Add Technology</a></li>
				</ul>
			</li>
		</ul>
	</div>
</aside>