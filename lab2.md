## 作业 2

### 上一题的程序中，修改的显示内容变为一个很长的字符串（至少2kb长）。并且保证程序正常运行不崩溃。

提示，可执行文件中原有的空间有限，必须要新加入数据，加入数据后必须要修改.text字段中的指针。

### 实验环境

- 主机: win10

- vs2017 x86_x64兼容工具命提示

- WinHex19.8

### 实验步骤

- 首先编写一个exe文件，运行效果如下

  ![](img/20190307-3.png)

- 执行命令`dumpin /disasm tiny.exe` 查看反汇编代码，红框处为传入字符串参数的地址

  ![](img/20190307-4.png)

  查看二进制PE文件中参数的地址发现正好是传入的字符串

  ![](img/20190307-5.png)

- 找到代码段，准备修改参数指针!

  ![](img/20190307-6.png)

  多次尝试后发现偏移地址影响的是[ 0000000140000298h]中，除去最末两位的6位数字，也就是400002这几位，我的exe文件大小为1088（440h）k，因此做如下修改,将字符串地址从298h改为498h

  ![](img/20190307-7-.png)

  同时在exe文件末尾填充字节,(从498h填充到c98h刚好是800h,2k的大小)

  ![](img/20190307-1.png)

- 查看反汇编代码验证参数地址已更改

  ![](img/20190307-8.png)

- 再次运行 tiny.exe 效果

  ![](img/20190307-2.png)