__set与__get方法的实例应用以及CLONE方式 深度克隆与浅层克隆并不相同（深层克隆将想要改变的数据重新克隆，浅层克隆克隆的数据共用一个层，一个数据改变另个
也会跟着改变）详见cloneexample.php
另应记住$p1=$2与$p1= clone $p2存在实质性差距，前者同用一个空间，后者克隆成功后自成空间
