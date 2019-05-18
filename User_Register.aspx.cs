using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Canclub
{
    public partial class User_Register : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (Session["userID"] != null)
            {
                Response.Redirect("~/Profile.aspx");
            }
            if (!IsPostBack)
            {
                CANCLUBEntities c = new CANCLUBEntities();
                listDepartment.DataSource = c.Department.ToList();
                listDepartment.DataTextField = "DepartmentName";
                listDepartment.DataValueField = "DepartmentID";
                listDepartment.DataBind();
            }
        }

        protected void btnSubmit_Click(object sender, EventArgs e)
        {
            CANCLUBEntities c = new CANCLUBEntities();

            if (c.Member.Where(x=>x.Email == txtEmail.Text).Count()>0)
            {
                lblError.Visible = true;
                lblError.Text = "This email adress already registered.";
                return;
            }
            if (c.Member.Where(x => x.UserName == txtUserName.Text).Count() > 0)
            {
                lblError.Visible = true;
                lblError.Text = "This username adress already registered.";
                return;
            }
            string imageUrl = "";
            //Photo Save
            if (filePhoto.HasFile)
            {
                try
                {
                    var originalFilename = Path.GetFileName(filePhoto.FileName);
                    string fileId = Guid.NewGuid().ToString().Replace("-", "");
                    var path = Path.Combine(Server.MapPath("~/Uploads/Photo/"), fileId);
                    filePhoto.SaveAs(path);
                    imageUrl = fileId;

                }
                catch (Exception)
                {

                    
                }
            }
            Member m = new Member();
            m.FirstName = txtFirstName.Text;
            m.LastName = txtLastName.Text;
            m.BirthDate = Convert.ToDateTime(txtBirth.Text);
            m.DepartmentID = Convert.ToInt32(listDepartment.SelectedValue);
            m.Email = txtEmail.Text;
            m.UserName = txtUserName.Text;
            m.Password = txtPassword.Text;
            m.Photo = imageUrl;
            c.Member.Add(m);
            c.SaveChanges();
        }
    }
}