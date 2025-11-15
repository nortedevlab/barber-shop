import React from 'react';
import {createRoot} from 'react-dom/client';
import '@/css/app.css';

function App() {
    return <div>CRM Barbearia SaaS</div>;
}

const el = document.getElementById('app');
if (el) createRoot(el).render(<App/>);
