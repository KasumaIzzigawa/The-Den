function createMarkup() {
    return {__html: `<p>${this.props.article.articleContent}</p>`};
}

function setHTML() {
    return <div dangerouslySetInnerHTML={createMarkup()}></div>;
}

class ArticleDisplay extends React.Component{
    constructor(props){
        super(props);

    }
    render() {
        return (
            <div>
                <h3>{this.props.article.articleName}</h3>
                <h6>{this.props.article.articleDate}</h6>
                <p>{this.props.article.articleContent}</p>
            </div>
        );
    }
}