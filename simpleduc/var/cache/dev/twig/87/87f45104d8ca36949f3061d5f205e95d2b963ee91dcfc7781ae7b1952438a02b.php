<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_609eecbc11491e04369e28c9615d951d6665b92eb736f2b51d703f259c43712c extends Twig_Template
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
        $__internal_c87a0ccf81ca934ed0b7f526e2b29153a91c98f33474567ce0f7db5f8f5850d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87a0ccf81ca934ed0b7f526e2b29153a91c98f33474567ce0f7db5f8f5850d8->enter($__internal_c87a0ccf81ca934ed0b7f526e2b29153a91c98f33474567ce0f7db5f8f5850d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f45ed19c0c01625acb755bb1237834ddac7eea53c544a3b32c4d7d1d4e3ab130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45ed19c0c01625acb755bb1237834ddac7eea53c544a3b32c4d7d1d4e3ab130->enter($__internal_f45ed19c0c01625acb755bb1237834ddac7eea53c544a3b32c4d7d1d4e3ab130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c87a0ccf81ca934ed0b7f526e2b29153a91c98f33474567ce0f7db5f8f5850d8->leave($__internal_c87a0ccf81ca934ed0b7f526e2b29153a91c98f33474567ce0f7db5f8f5850d8_prof);

        
        $__internal_f45ed19c0c01625acb755bb1237834ddac7eea53c544a3b32c4d7d1d4e3ab130->leave($__internal_f45ed19c0c01625acb755bb1237834ddac7eea53c544a3b32c4d7d1d4e3ab130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
