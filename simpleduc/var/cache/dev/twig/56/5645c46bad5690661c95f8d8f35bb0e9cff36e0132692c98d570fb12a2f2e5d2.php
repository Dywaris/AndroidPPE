<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_10e4c47a58862a54dc0f55ba04e47e52c92e7b9364837f4f7828f013617f87a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96184dd267deebff8a2de1bcbbbc09e6c2a6b151d0e99dfa2680d69c60b12c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96184dd267deebff8a2de1bcbbbc09e6c2a6b151d0e99dfa2680d69c60b12c2b->enter($__internal_96184dd267deebff8a2de1bcbbbc09e6c2a6b151d0e99dfa2680d69c60b12c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1c026d84161414b3fb4b4245bcb66572257f70b81eb911f1d4f7cfbcff0a6535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c026d84161414b3fb4b4245bcb66572257f70b81eb911f1d4f7cfbcff0a6535->enter($__internal_1c026d84161414b3fb4b4245bcb66572257f70b81eb911f1d4f7cfbcff0a6535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_96184dd267deebff8a2de1bcbbbc09e6c2a6b151d0e99dfa2680d69c60b12c2b->leave($__internal_96184dd267deebff8a2de1bcbbbc09e6c2a6b151d0e99dfa2680d69c60b12c2b_prof);

        
        $__internal_1c026d84161414b3fb4b4245bcb66572257f70b81eb911f1d4f7cfbcff0a6535->leave($__internal_1c026d84161414b3fb4b4245bcb66572257f70b81eb911f1d4f7cfbcff0a6535_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
