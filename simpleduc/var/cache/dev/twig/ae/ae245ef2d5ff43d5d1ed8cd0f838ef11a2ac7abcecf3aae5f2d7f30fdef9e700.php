<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b7079b2b0352f85d4017863b0e64a9c35565045ecc8c1c1c25feaea16bdfedef extends Twig_Template
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
        $__internal_13377ad50f55ddf4060e22ffb2f508d7a7295e8a96cc3846383374f628c7495d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13377ad50f55ddf4060e22ffb2f508d7a7295e8a96cc3846383374f628c7495d->enter($__internal_13377ad50f55ddf4060e22ffb2f508d7a7295e8a96cc3846383374f628c7495d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_638e83ffeabbd8ffbcbfd53d56c4c95aa301d1ae6794cfe4ff82042b71803d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638e83ffeabbd8ffbcbfd53d56c4c95aa301d1ae6794cfe4ff82042b71803d80->enter($__internal_638e83ffeabbd8ffbcbfd53d56c4c95aa301d1ae6794cfe4ff82042b71803d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_13377ad50f55ddf4060e22ffb2f508d7a7295e8a96cc3846383374f628c7495d->leave($__internal_13377ad50f55ddf4060e22ffb2f508d7a7295e8a96cc3846383374f628c7495d_prof);

        
        $__internal_638e83ffeabbd8ffbcbfd53d56c4c95aa301d1ae6794cfe4ff82042b71803d80->leave($__internal_638e83ffeabbd8ffbcbfd53d56c4c95aa301d1ae6794cfe4ff82042b71803d80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
