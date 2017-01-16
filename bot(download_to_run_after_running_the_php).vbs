Set IE = CreateObject("InternetExplorer.Application") 
set WshShell = WScript.CreateObject("WScript.Shell")  
IE.Navigate "https://markov-cloned1-parkhe.c9users.io/111.php/" 
IE.Visible = True 
Wscript.Sleep 500 
IE.Document.All.Item("myText1").Value = "realDonaldTrump" 
IE.Document.All.Item("But2").click