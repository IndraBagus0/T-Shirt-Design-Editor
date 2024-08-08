// src/components/TextInput.jsx
import React from 'react';

const TextInput = ({ text, handleTextChange }) => {
  return (
    <div className="mb-4">
      <label className="block mb-1">Add Text:</label>
      <textarea
        value={text}
        onChange={handleTextChange}
        className="w-full p-2 border border-gray-300"
      />
    </div>
  );
};

export default TextInput;
