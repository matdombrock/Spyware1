
from tkinter import Tk, Label, Button

import payload
import config
class GUI:
    def __init__(self, master):
        self.master = master
        master.title(config.title)

        self.label = Label(master, text=config.label)
        self.label.pack()

        self.greet_button = Button(master, text=config.button_text, command=payload.go)
        self.greet_button.pack()

        self.close_button = Button(master, text="Close", command=master.quit)
        self.close_button.pack()

   

root = Tk()
root.geometry('{}x{}'.format(480, 256))
my_gui = GUI(root)
root.mainloop()