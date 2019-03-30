## 作业 3

### 在notepad（32位64位均可）中，输入一段文字。然后使用调试器，在内存中修改这段文字。使得没有在界面操作notepad的修改文字的情况下。notepad中显示的文字变化。

提示，在调试器中定位控件缓存的内存地址，可以用搜索、逆向、消息截获分析、API截获分析等方法。

------
### 实验环境

- 主机：win10

- windbg x64

### 实验步骤

- 打开notepad，输入文字 hello from cloud

- 打开windbg x64，选择File > Attach To a Process，选择notepad.exe

  ```
  !heap -a # 查看所有堆
  s -u 要查找的段的起始地址和结束地址 "要匹配的字符串"  # 查找字符串
  du 地址 # Unicode显示字符串
  ezu 地址 "更改的字符串" # 更改字符串
  ```

  ![](D:/workspace/software-system-securirty/img/work3-changeMemoryInfo.png)

- 结果演示

  ![](D:/workspace/software-system-securirty/img/work3.gif)