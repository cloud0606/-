from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
# webdriver实例
# 创建浏览器驱动对象
driver = webdriver.Firefox()
driver.get('http://192.168.9.3/test1.php')
# 显式等待，设置timeout
wait = WebDriverWait(driver, 9)
payload = "<script>alert(1)</script>"
# 判断输入框是否加载
input = wait.until(
    EC.presence_of_element_located(
        (By.CSS_SELECTOR, '#input')))
# 判断搜索按钮是否加载
submit = wait.until(
    EC.element_to_be_clickable(
        (By.CSS_SELECTOR, '#btn')))
# 打印原始页面
pageSource = driver.page_source
print(pageSource)
# 输入搜索词，点击搜索按钮
input.send_keys(payload)
submit.click()
try:
    # 处理弹出的alert
    alert = driver.switch_to.alert
    alert.accept()
except:
    print("\nXSS doesn't exist")
    print('payload is :',payload)
else:
    pageSource = driver.page_source
    print(pageSource)
    print('\nXSS exist')
    print('payload is :',payload)

# 关闭浏览器驱动
driver.close()
