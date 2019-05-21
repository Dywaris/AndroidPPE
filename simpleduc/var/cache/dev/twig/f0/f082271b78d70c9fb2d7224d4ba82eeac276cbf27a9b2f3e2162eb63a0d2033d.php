<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7bd1324238e1df204d6b0345fe9e81454faeb67de5c7b7e72e5a7ab1034fa190 extends Twig_Template
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
        $__internal_8976ed88ee41a1bb86dd527aff7eb5752bcd3403e6706104a293ecb12f6f9d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8976ed88ee41a1bb86dd527aff7eb5752bcd3403e6706104a293ecb12f6f9d59->enter($__internal_8976ed88ee41a1bb86dd527aff7eb5752bcd3403e6706104a293ecb12f6f9d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6c7b9a57d2db8803da012074f8d3a07302ff479e97b89540866309f05b761ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7b9a57d2db8803da012074f8d3a07302ff479e97b89540866309f05b761ec7->enter($__internal_6c7b9a57d2db8803da012074f8d3a07302ff479e97b89540866309f05b761ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8976ed88ee41a1bb86dd527aff7eb5752bcd3403e6706104a293ecb12f6f9d59->leave($__internal_8976ed88ee41a1bb86dd527aff7eb5752bcd3403e6706104a293ecb12f6f9d59_prof);

        
        $__internal_6c7b9a57d2db8803da012074f8d3a07302ff479e97b89540866309f05b761ec7->leave($__internal_6c7b9a57d2db8803da012074f8d3a07302ff479e97b89540866309f05b761ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
