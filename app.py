import os
from flask import Flask, render_template, request, flash, redirect, url_for
from dotenv import load_dotenv
import smtplib
from email.mime.text import MIMEText

# 1) Load variabel dari .env
load_dotenv()

app = Flask(__name__)
app.secret_key = os.getenv("FLASK_SECRET")

# 2) Konfigurasi SMTP
SMTP_SERVER     = "smtp.gmail.com"
SMTP_PORT       = 587
SENDER_EMAIL    = os.getenv("SENDER_EMAIL")
SENDER_PASSWORD = os.getenv("SENDER_PASSWORD")

def send_email(to_email, subject, body):
    msg = MIMEText(body, "plain", "utf-8")
    msg["Subject"] = subject
    msg["From"]    = SENDER_EMAIL
    msg["To"]      = to_email

    server = smtplib.SMTP(SMTP_SERVER, SMTP_PORT)
    server.starttls()
    server.login(SENDER_EMAIL, SENDER_PASSWORD)
    server.send_message(msg)
    server.quit()

@app.route("/", methods=["GET"])
def index():
    return render_template("form.html")

@app.route("/submit", methods=["POST"])
def submit():
    user_email = request.form.get("email")
    if not user_email:
        flash("Email tidak boleh kosong.", "error")
        return redirect(url_for("index"))

    subject = "Terima kasih sudah mendaftar!"
    body = (
        f"Halo,\n\n"
        f"Terima kasih telah memasukkan email Anda ({user_email}).\n"
        f"Ini adalah pesan otomatis dari website kami.\n\n"
        f"Salam,\nTim Kami"
    )

    try:
        send_email(user_email, subject, body)
        flash(f"Email berhasil dikirim ke {user_email}.", "success")
    except Exception as e:
        app.logger.error(f"Gagal kirim email: {e}")
        flash("Terjadi kesalahan saat mengirim email.", "error")

    return redirect(url_for("index"))

if __name__ == "__main__":
    app.run()
