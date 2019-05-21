<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1f324c2f050b6b71f7aebeb2ae6b48bf7edd157995be06f6afeaf49723a6eacd extends Twig_Template
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
        $__internal_023161322fb0e1911b226150d3112e09e859c05374205cbd18ae90519c0b199f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023161322fb0e1911b226150d3112e09e859c05374205cbd18ae90519c0b199f->enter($__internal_023161322fb0e1911b226150d3112e09e859c05374205cbd18ae90519c0b199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ed38d486a04dc74bbfbd996e76473d6cace87d2c60a47d14fb5a360c87cda1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed38d486a04dc74bbfbd996e76473d6cace87d2c60a47d14fb5a360c87cda1b0->enter($__internal_ed38d486a04dc74bbfbd996e76473d6cace87d2c60a47d14fb5a360c87cda1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_023161322fb0e1911b226150d3112e09e859c05374205cbd18ae90519c0b199f->leave($__internal_023161322fb0e1911b226150d3112e09e859c05374205cbd18ae90519c0b199f_prof);

        
        $__internal_ed38d486a04dc74bbfbd996e76473d6cace87d2c60a47d14fb5a360c87cda1b0->leave($__internal_ed38d486a04dc74bbfbd996e76473d6cace87d2c60a47d14fb5a360c87cda1b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
