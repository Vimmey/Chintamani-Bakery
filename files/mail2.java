using System;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using System.Net.Mail;
using System.Net;
using System.IO;

public partial class messagesending : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        try
        {

            String lab = TextBox2.Text + Label2.Text;
            MailMessage m = new MailMessage(lab, TextBox4.Text, TextBox5.Text,null);
            SmtpClient s = new SmtpClient("Smtp.gmail.com", 25);
            s.EnableSsl = true;
            s.Credentials = new System.Net.NetworkCredential(lab, TextBox3.Text);

            s.Send(m);
            Label3.Text = "Email sent successfully !";
        }

        catch (Exception ex)
        {
            Label3.Text = ex.Message;
        }
    }
}