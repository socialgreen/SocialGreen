<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Register.aspx.cs" Inherits="Canclub.User_Register" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    

        <table>
            <tr>
                <td colspan="2">
                    <asp:Label ID="lblError" runat="server" Visible="false"></asp:Label>
                </td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td>
                    <asp:TextBox ID="txtFirstName" runat="server" ></asp:TextBox>
                </td>
            </tr>
              <tr>
                <td>Last Name:</td>
                <td>
                    <asp:TextBox ID="txtLastName" runat="server" required></asp:TextBox>
                </td>
            </tr>
              <tr>
                <td>Birth Date:</td>
                <td>
                    <asp:TextBox ID="txtBirth" runat="server" type="date"></asp:TextBox>
                </td>
            </tr>
              <tr>
                <td>E-Mail:</td>
                <td>
                    <asp:TextBox ID="txtEmail" runat="server" type="email"></asp:TextBox>
                </td>
            </tr>
              <tr>
                <td>Department:</td>
                <td>
                    <asp:ListBox ID="listDepartment" runat="server" Rows="1"></asp:ListBox>
                </td>
            </tr>
              <tr>
                <td>Username:</td>
                <td>
                    <asp:TextBox ID="txtUserName" runat="server" required></asp:TextBox>
                </td>
            </tr>
              <tr>
                <td>Pasword:</td>
                <td>
                    <asp:TextBox ID="txtPassword" runat="server" type="password"></asp:TextBox>
                </td>
            </tr>
              <tr>
                <td>Photo:</td>
                <td>
                   <asp:FileUpload id="filePhoto" runat="server" />
                </td>
            </tr>
        </table>
            <asp:Button ID="btnSubmit" Text="Submit"  runat="server" OnClick="btnSubmit_Click" />

    </div>
    </form>
</body>
</html>
