import { Image, StyleSheet } from 'react-native'
import React from 'react'

const Styles = StyleSheet.create({
    rec: {
        flex: 1,
        width: "100%",
        height: 72,
        position: "absolute",
        top: 0,
    }
})

const RectangleIcon = () => {
    return (
        <Image source={require('../../src/assets/images/Rectangle97.png')}
            style={Styles.rec} resizeMode='cover' />
    )
}

export default RectangleIcon;
