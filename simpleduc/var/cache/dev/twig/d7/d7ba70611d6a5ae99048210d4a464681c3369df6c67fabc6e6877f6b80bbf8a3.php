<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_178608283fe9338841dfdf3da8fc08795c522f6f5f5d45edc76927e9ad50aa86 extends Twig_Template
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
        $__internal_69a537547261b13a93964e4660d728cf5e77028ef51ceb65e11ec0a8f0c81d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a537547261b13a93964e4660d728cf5e77028ef51ceb65e11ec0a8f0c81d73->enter($__internal_69a537547261b13a93964e4660d728cf5e77028ef51ceb65e11ec0a8f0c81d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_42e3a6f627b3f8bb46eefed3934d9e92c8d7b8b0b20a54d6d4e2b26f126d4fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e3a6f627b3f8bb46eefed3934d9e92c8d7b8b0b20a54d6d4e2b26f126d4fb0->enter($__internal_42e3a6f627b3f8bb46eefed3934d9e92c8d7b8b0b20a54d6d4e2b26f126d4fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_69a537547261b13a93964e4660d728cf5e77028ef51ceb65e11ec0a8f0c81d73->leave($__internal_69a537547261b13a93964e4660d728cf5e77028ef51ceb65e11ec0a8f0c81d73_prof);

        
        $__internal_42e3a6f627b3f8bb46eefed3934d9e92c8d7b8b0b20a54d6d4e2b26f126d4fb0->leave($__internal_42e3a6f627b3f8bb46eefed3934d9e92c8d7b8b0b20a54d6d4e2b26f126d4fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
