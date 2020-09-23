class ArticleDisplay extends React.Component{
    constructor(props){
        super(props);

    }
    
    rawMarkup(){
        var markup = this.props.article.articleContent;
        return { __html: markup };
    }

    render() {
        return (
            <div>
                <h3>{this.props.article.articleName}</h3>
                <h6>{this.props.article.articleDate}</h6>
                <p><span dangerouslySetInnerHTML={this.rawMarkup()} /></p>
            </div>
        );
    }
}