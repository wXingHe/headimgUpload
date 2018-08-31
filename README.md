原插件哪里来的已经忘了，我一个同事找来的，在我项目上线时除了岔子，有点郁闷，后来闲余的时候就进行了修正，源文件有很多坑。比如同时用了两个一样的id，函数里去两个不存在的dom中寻找资源。

photoClip中的配置：
{number} width 截取区域的宽度
 height 截取区域的高度
 file 上传图片的<input type="file">控件的选择器或者DOM对象
 view 显示截取后图像的容器的选择器或者DOM对象
 ok 确认截图按钮的选择器或者DOM对象
 outputType 指定输出图片的类型，可选 "jpg" 和 "png" 两种种类型，默认为 "jpg"
 strictSize 是否严格按照截取区域宽高裁剪。默认为false，表示截取区域宽高仅用于约束宽高比例。如果设置为true，则表示截取出的图像宽高严格按照截取区域宽高输出
 loadStart 开始加载的回调函数。this指向 fileReader 对象，并将正在加载的 file 对象作为参数传入
 loadComplete 加载完成的回调函数。this指向图片对象，并将图片地址作为参数传入
 loadError 加载失败的回调函数。this指向 fileReader 对象，并将错误事件的 event 对象作为参数传入
 clipFinish 裁剪完成的回调函数。this指向图片对象，会将裁剪出的图像数据DataURL作为参数传入
