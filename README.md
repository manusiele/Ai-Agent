# 📱 PulseScan

**PulseScan** is a cross-platform mobile application that detects the tone of social media comments in real time using AI-powered sentiment analysis. It helps political figures, brand managers, and digital analysts understand public feedback — whether it's **positive**, **negative**, or **neutral** — in English, Kiswahili, and other major languages.

---

## 🔍 Features

- 🔤 **Language Detection** — Automatically identifies the language of the text.
- 🌐 **Translation** — Translates non-English input to English before analysis.
- 📊 **Sentiment Analysis** — Uses an n8n AI agent to return tone analysis.
- 🧾 **Comment Review UI** — Displays original text, translated text, and sentiment summary.
- 📂 **History** (Coming Soon) — Saves past analyses for future review.
- 📱 **Built with React Native** — Runs smoothly on both Android and iOS.

---

## 🧠 How It Works

1. User enters or pastes a social media comment or post.
2. The app sends the text to an **n8n webhook** connected to:
   - Language Detection node
   - Translation node (if needed)
   - Sentiment Analysis (via OpenAI or similar model)
3. The n8n agent returns:
   ```json
   {
     "original": "Hii kazi ni safi sana mheshimiwa!",
     "language": "Swahili",
     "translated": "This work is really good honorable!",
     "sentiment": "Positive"
   }
The app displays the result in an intuitive, color-coded format.

🚀 Getting Started
1. Clone the Repository
bash
Copy
Edit
git clone https://github.com/your-username/pulsescan.git
cd pulsescan
2. Install Dependencies
bash
Copy
Edit
npm install
3. Add Environment Variables
Create a .env file in the root folder and add your n8n webhook URL:

env
Copy
Edit
N8N_WEBHOOK_URL=https://your-n8n-server.com/webhook/facebook-sentiment
Note: The backend must be protected or behind HTTPS.

4. Run on Android/iOS
For Android:

bash
Copy
Edit
npx react-native run-android
For iOS:

bash
Copy
Edit
npx react-native run-ios
🛡 Security
Sensitive credentials and URLs are stored in .env.

All user input is sanitized before sending to the API.

Optional: Use a Flask or Django backend proxy for token verification.

📁 Project Structure
bash
Copy
Edit
PulseScan/
├── assets/              # App icons, fonts, etc.
├── components/          # Reusable UI components
├── screens/             # Home, Results, History, Settings
├── services/            # API call to n8n webhook
├── App.js               # Main app entry point
├── .env                 # Environment config
└── README.md
✨ Future Features
🧠 User authentication

📂 Comment history and export

🗂 Categorization by topic or platform

🌍 Multilingual UI interface

🤝 Contributing
Contributions are welcome! Please open issues or pull requests to improve the project.

🧑‍💻 Author
Manu Siele
🔗 LinkedIn | ✉️ siele@email.com | 🌍 Kenya

📄 License
This project is licensed under the MIT License.

yaml
Copy
Edit

---

Let me know if you want:
- A **live mockup UI** to go with it
- A version of this README customized for GitHub Pages
- Backend (Flask/Django) README for the optional secure API layer

Ready to scaffold the React Native project or hook in the n8n agent?








Ask ChatGPT
